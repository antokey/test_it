<?php
	function load_result_by_keword($conn,$keyword,$flag){

      $sql1 = "SELECT * FROM kt WHERE REPLACE(".$flag.", ' ', '') LIKE '%$keyword%'";
      $sql2 = "SELECT * FROM sk WHERE REPLACE(".$flag.", ' ', '') LIKE '%$keyword%'";
      $sql3 = "SELECT * FROM lg WHERE REPLACE(".$flag.",' ', '') LIKE '%$keyword%'";

      $result_kt = mysqli_query($conn, $sql1);
      $result_sk = mysqli_query($conn, $sql2);
      $result_lg = mysqli_query($conn, $sql3);
			
			$cnt_kt = mysqli_num_rows($result_kt);
			$cnt_sk = mysqli_num_rows($result_sk);
			$cnt_lg = mysqli_num_rows($result_lg);
			
			$max = max($cnt_kt, $cnt_sk, $cnt_lg);
			if($cnt_kt==0) $rows_kt=[];
			if($cnt_sk==0) $rows_sk=[];
			if($cnt_lg==0) $rows_lg=[];

			while($row1 = mysqli_fetch_array($result_kt)){
              $rows_kt[] = $row1;
			}
			
			while($row2 = mysqli_fetch_array($result_sk)){
              $rows_sk[] = $row2;
			}
			
			while($row3 = mysqli_fetch_array($result_lg)){
              $rows_lg[] = $row3;
			}

			if($max == $cnt_kt){
				kt_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_lg, $cnt_sk);
			}
			else if($max == $cnt_sk){
				sk_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_kt, $cnt_lg);
			}
			else{

				lg_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_kt, $cnt_sk);
			}
	}
	
	function kt_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_lg, $cnt_sk){
		$j = 0;
		$k = 0;
		$l = 0;
		
		for($i = 0 ; $i < $max ; $i++){
			echo "
		<table align = center width = '800' height='500' border = '1' cellpadding = '100' style='margin-bottom: 60px;'>
		<tr align = center>
		  <td></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
		</tr>";
			$flag_lg = FALSE;
			$flag_sk = FALSE;
			for($j = 0 ; $j < $cnt_lg ; $j++){
				if($rows_lg[$j][3] == $rows_kt[$i][3]){
					$flag_lg = TRUE;
					break;
				}
			}
			for($k = 0 ; $k < $cnt_sk ; $k++){
				if($rows_sk[$k][3] == $rows_kt[$i][3]){
					$flag_sk = TRUE;
					break;
				}
			}
			
			$list = array('img', 'model','name',  '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자','지원금 변화 그래프');
			for($col = 0 ; $col < 9 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";

				if($col==0)  print_img($rows_kt[$i][0]) ;
				else if($col==8) print_gh_btn($rows_kt[$i][1],'kt');
				else echo "<td>".$rows_kt[$i][$col]."</td>";
			
				if($flag_lg){
					if($col==0) print_img($rows_lg[$j][0]);
					else if($col==8) print_gh_btn($rows_lg[$j][1],'lg');
					else echo "<td>".$rows_lg[$j][$col]."</td>";
				}else{echo "<td>0</td>";}

				if($flag_sk){
					if($col==0)  print_img($rows_sk[$k][0]);
					else if($col==8) print_gh_btn($rows_sk[$k][1],'sk');
					else echo "<td>".$rows_sk[$k][$col]."</td>";
				}else{echo "<td>0</td>";}
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	
	function sk_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_kt, $cnt_lg){
		$j = 0;
		$k = 0;
		$l = 0;
			
		for($i = 1 ; $i < $max ; $i++){
			echo "
		<table align = center width = '800' height='500' border = '1' cellpadding = '10'>
		<tr align = center>
		  <td></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
		</tr>";
			$flag_kt = FALSE;
			$flag_lg = FALSE;
			for($j = 0 ; $j < $cnt_kt ; $j++){
				if($rows_kt[$j][3] == $rows_sk[$i][3]){
					$flag_kt = TRUE;
					break;
				}
			}
			for($k = 0 ; $k < $cnt_lg ; $k++){
				if($rows_lg[$k][3]==$rows_sk[$i][3]){
					$flag_lg = TRUE;
					break;
				}
			}
			
			$list = array('img','model', 'name','출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)','공시일자','지원금 변화 그래프');
			for($col = 0 ; $col < 9 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";

				if($col==0)  print_img($rows_sk[$i][0]);
				else if($col==8) print_gh_btn($rows_sk[$i][1],'sk');
				else echo "<td>".$rows_sk[$i][$col]."</td>";
 
				if($flag_kt){
					if($col==0) print_img($rows_kt[$j][0]);
					else if($col==8) print_gh_btn($rows_kt[$j][1],'kt');
					else echo "<td>".$rows_kt[$j][$col]."</td>";
				}else{echo "<td>0</td>";}
				if($flag_lg){
					if($col==0)  print_img($rows_lg[$k][0]);
					else if($col==8) print_gh_btn($rows_lg[$k][1],'lg');
					else echo "<td>".$rows_lg[$k][$col]."</td>";
				}else{echo "<td>0</td>";}
				echo "</tr>";
			}
		echo "</table>";
		}
	}

	
	function lg_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_kt, $cnt_sk){
		$j = 0;
		$k = 0;
		$l = 0;
		
		for($i = 0 ; $i < $max ; $i++){
			echo "
		<table align = center width = '800' height='500' border = '1' cellpadding = '10'>
		<tr align = center>
		  <td></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
		</tr>";
			$flag_kt = FALSE;
			$flag_sk = FALSE;
				for($j = 0 ; $j < $cnt_kt ; $j++){
					if($rows_kt[$j][3] == $rows_lg[$i][3]){
						$flag_kt = TRUE;
						break;
					}
				}
				for($k = 0 ; $k < $cnt_sk ; $k++){
					if($rows_sk[$k][3] == $rows_lg[$i][3]){
						$flag_sk = TRUE;
						break;
					}
				}
			
			$list = array('img', 'model','name',  '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자','지원금 변화 그래프');
			for($col = 0; $col < 9 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";

        if($col==0)  print_img($rows_lg[$i][0]);
        else if($col==8) print_gh_btn($rows_lg[$i][1],'lg');
				else echo "<td>".$rows_lg[$i][$col]."</td>";

				if($flag_kt){
          if($col==0)  print_img($rows_kt[$j][0]);
          else if($col==8) print_gh_btn($rows_kt[$j][1],'kt');
					else echo "<td>".$rows_kt[$j][$col]."</td>";
				}
				else{echo "<td>0</td>";}
				if($flag_sk){
          if($col==0)  print_img($rows_sk[$k][0]) ;
          else if($col==8) print_gh_btn($rows_sk[$k][1],'sk');
					else echo "<td>".$rows_sk[$k][$col]."</td>";
				}
				else{echo "<td>0</td>";}
				echo "</tr>";
			}
		echo "</table>";
		}
  }
  
function print_img($url){

    echo '<td><div  class="img-thumbnail" style=" padding-left: 30px; padding-right: 30px;">'
    .'<img  src="'.$url.'" height=100/></div></td>';

}
function print_gh_btn($model,$tel){

  echo '<td><a href="graph.php?model='.$model.'&tel='.$tel.'"  class=" btn-default btn-success btn-default" target="_blank" ">보기</a></td>';

}

function db_init($host,$duser,$dpasswd,$dname){
  $conn=mysqli_connect($host,$duser,$dpasswd);
  mysqli_select_db($conn,$dname);
  return $conn ;
}

function make_update_array ($model,$tel,$conn)
{

  //$model='jieun'; # here is place to put seach keyword
  //$tel='kt';  # here is place to put seach keyword

  $result=mysqli_query($conn,'SELECT * FROM update_data WHERE model ="'.$model.'" and telecom="'.$tel.'" ORDER BY id ASC'); 
  $temp=[];
  while($row = mysqli_fetch_array($result)) {
    $temp[]=$row;
  }

  return $temp; 

}
?>
 <script>
  function draw_graph(arr2){

   
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);
  
      function drawChart() {
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Day');
        data.addColumn('number', 'price');

        for(var a=0; a<arr2.length; a++) {
          data.addRow([arr2[a]['date'],Number(arr2[a]['gongshi'])]);  
        } 

        /*        for(var a=0; a<3; a++) {
          data.addRow(['aaa',222]);  
        } */     

        var options = {
          title: '공시지원금 변화',
          width: 900,
          height: 500,
        };

        var chart = new google.charts.Line(document.getElementById('line_top_x'));

        chart.draw(data, google.charts.Line.convertOptions(options));
      }
  }

  
  function d(){document.write("<br/><b>Normal Object</b><br/>");}


  function search1(){
   if(frm1.search.value ){

     frm1.submit();

   }else{

     alert('검색어를 입력 해 주세요.');

   }
 }


 </script>

