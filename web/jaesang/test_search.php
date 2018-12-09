<?php
//  session_start();
require('search_function.php');
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

		}
		 

	?>
</body>
</html>