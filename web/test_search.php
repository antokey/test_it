<?php
//  session_start();
require('test.php');
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
              $rows_kt[] = $row1;
			}
			
			while($row2 = mysqli_fetch_array($result_sk)){
              $rows_sk[] = $row2;
            }
			
			while($row3 = mysqli_fetch_array($result_lg)){
              $rows_lg[] = $row3;
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
				$temp=[];
				$temp[] = $rows_kt;
				$temp[] = $rows_sk;
				$temp[] = $rows_lg;

				aaa($temp);

			}
			

	?>
</body>
</html>