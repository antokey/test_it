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
	for($i = 0 ; $i < $max ; $i++){
		echo "<table align = center width = '800' border = '1' cellpadding = '10'>
    <tr align = center>
      <td bgcolor = '#4374D9'>";
	  if($j < $cnt_kt){
		  echo $temp1[$j][2];
	  }
	  else if($k < $cnt_sk){
		  echo $temp2[$k][2];
	  }
	  else if($l < $cnt_lg){
		  echo $temp3[$l][2];
	  }
	  else{
		  echo "";
	  }
	  echo"</td>
      <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>SKT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>LG U+</font></td>
    </tr>
    <tr align = center>";
		echo "
		<td>정상가(a)</td>
		<td>";
			if($j < $cnt_kt){
				echo $temp1[$j][3];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($k < $cnt_sk){
				echo $temp2[$k][3];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($l < $cnt_lg){
				echo $temp3[$l][3];
			}
			else{
				echo "";
			}
		echo"</td>
	</tr>
	<tr align = center>
		<td>공시지원금(b)</td>
		<td>";
			if($j < $cnt_kt){
				echo $temp1[$j][4];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($k < $cnt_sk){
				echo $temp2[$k][4];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($l < $cnt_lg){
				echo $temp3[$l][4];
			}
			else{
				echo "";
			}
		echo"</td>
	</tr>
	<tr align = center>
		<td>추가지원금(c)</td>
		<td>";
			if($j < $cnt_kt){
				echo $temp1[$j][5];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($k < $cnt_sk){
				echo $temp2[$k][5];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($l < $cnt_lg){
				echo $temp3[$l][5];
			}
			else{
				echo "";
			}
		echo"</td>
	</tr>
	<tr align = center>
		<td>판매가(c)</td>
		<td>";
			if($j < $cnt_kt){
				echo $temp1[$j][6];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($k < $cnt_sk){
				echo $temp2[$k][6];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($l < $cnt_lg){
				echo $temp3[$l][6];
			}
			else{
				echo "";
			}
		echo"</td>
	</tr>
	<tr align = center>
		<td>공시일자</td>
		<td>";
			if($j < $cnt_kt){
				echo $temp1[$j][7];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($k < $cnt_sk){
				echo $temp2[$k][7];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($l < $cnt_lg){
				echo $temp3[$l][7];
			}
			else{
				echo "";
			}
		echo"</td>
	</tr>
	  </table>";
	  if($j < $cnt_kt){	
		  $j += 1;
	  }
	  if($k < $cnt_sk){
		  $k += 1;
	  }
	  if($l < $cnt_lg){
		  $l += 1;
	  }
	}
	?>
</body>
</html>