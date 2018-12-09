<?php
//  session_start();
$conn=mysqli_connect('localhost', 'root','wldms332', 'project', '3306');
$db=mysqli_select_db($conn , "project");
mysqli_query($conn, "set names utf8");
?>
<!DOCTYPE html>
<html>
<head>
  <title>검색결과창</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="min.css">
</head>
<body>
  <?php
  		$category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];
			
            $sql1 = "SELECT * FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
            $sql2 = "SELECT * FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
            $sql3 = "SELECT * FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
			
			$cnt_kt = mysqli_num_rows($result_kt);
			$cnt_sk = mysqli_num_rows($result_sk);
			$cnt_lg = mysqli_num_rows($result_lg);
			
			$max = max($cnt_kt, $cnt_sk, $cnt_lg);
			
			while($row1 = mysqli_fetch_array($result_kt)){
              $temp1[] = $row1;
			}
			
			while($row2 = mysqli_fetch_array($result_sk)){
              $temp2[] = $row2;
            }
			
			while($row3 = mysqli_fetch_array($result_lg)){
              $temp3[] = $row3;
            }
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
			  $sql1 = "SELECT * FROM kt WHERE REPLACE(model, ' ', '') LIKE '$keyword%'";
              $sql2 = "SELECT * FROM sk WHERE REPLACE(model, ' ', '') LIKE '$keyword%'";
              $sql3 = "SELECT * FROM lg WHERE REPLACE(model, ' ', '') LIKE '$keyword%'";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
			  
			  $cnt_kt = mysqli_num_rows($result_kt);
			  $cnt_sk = mysqli_num_rows($result_sk);
			  $cnt_lg = mysqli_num_rows($result_lg);
			
			  $max = max($cnt_kt, $cnt_sk, $cnt_lg);
			  
			  while($row1 = mysqli_fetch_array($result_kt)){
				$rows_kt[] = $row1;
			  }
			  
			  while($row2 = mysqli_fetch_array($result_sk)){
				$rows_sk[] = $row2;
			  }
			  
			  while($row3 = mysqli_fetch_array($result_lg)){
				$rows_lg[] = $row3;
			  }
		  }
	$j = 0;
	$k = 0;
	$l = 0;
	
	for($i = 0 ; $i < $max ; $i++){
		echo "
	<table align = center width = '800' border = '1' cellpadding = '10'>
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
		
		$list = array('', '', '', '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자');
		for($col = 3 ; $col < 8 ; $col++){
			echo "<tr align=center>
					<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";
			echo "<td>".$rows_lg[$i][$col]."</td>";
			
			if($flag_kt){
				echo "<td>".$rows_kt[$j][$col]."</td>";
			}else{echo "<td>0</td>";}
			if($flag_sk){
				echo "<td>".$rows_sk[$k][$col]."</td>";
			}else{echo "<td>0</td>";}
			echo "</tr>";
		}
	echo "</table>";
	}
	?>
</body>
</html>