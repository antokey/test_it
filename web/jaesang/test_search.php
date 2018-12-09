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
				$temp1[] = $row1;
			  }
			  
			  while($row2 = mysqli_fetch_array($result_sk)){
				$temp2[] = $row2;
			  }
			  
			  while($row3 = mysqli_fetch_array($result_lg)){
				$temp3[] = $row3;
			  }
		  }
	$j = 0;
	$k = 0;
	$l = 0;
	echo = "
	<table align = center width = '800' border = '1' cellpadding = '10'>
    <tr align = center>
      <td bgcolor = '#4374D9'></td>
      <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>SKT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>LG U+</font></td>
    </tr>";
	for($i = 0 ; $i < $max ; $i++){
		for($j = 0 < $j < cnt_kt ; $j++){
			if($temp1[$j][3] == $temp3[$i][3])
				$flag_kt = TRUE;
				break;
		for($k = 0 < $k < cnt_sk ; $k++){
			if($temp2[$k][3] == $temp3[$i][3])
				$flag_sk = TRUE;
				break;
		}
		for($col = 3 ; $col < 8 ; $col++){
			echo "<tr align=center>";
			echo "<td>".$temp3[$i][$col]."</td>";
			
			if(flag_kt){
				echo "<td>".$temp1[$j][$col]."</td>";
			}else{echo "0";}
			if(flag_sk){
				echo "<td>".$temp2[$k][$col]."</td>";
			}else{echo "<td>0</td>";}
			echo "</tr>";
		}
	}
	?>
	</table>
</body>
</html>