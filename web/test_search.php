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
	for($i = 0 ; $i < 4 ; $i++){
		echo "<table align = center width = '800' border = '1' cellpadding = '10'>
    <tr align = center>
      <td bgcolor = '#4374D9'></td>
      <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>SKT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>LG U+</font></td>
    </tr>
    <tr align = center>";
		$category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT * FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
            $sql2 = "SELECT * FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
            $sql3 = "SELECT * FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
			
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
			  
			  $sql1 = "SELECT * FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%'";
              $sql2 = "SELECT * FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%'";
              $sql3 = "SELECT * FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%'";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
			  
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
		echo "
		<td>정상가(a)</td>
		<td>
			<ul>
			</ul>
		  </td>
		<td>
			<ul>
			</ul>
		</td>
		<td>
			<ul>
			</ul>
		  </td>
		</tr>
		<tr align = center>
		  <td>공시지원금(b)</td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		</tr>
		<tr align = center>
		  <td>추가지원금(c)</td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		</tr>
		<tr align = center>
		  <td>판매가(c)</td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		</tr>
		<tr align = center>
		  <td>공시일자</td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		  <td>
			<ul>
			</ul>
		  </td>
		</tr>
	  </table>";
	}
	?>
</body>
</html>