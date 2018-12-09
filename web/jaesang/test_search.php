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
  <table align = center width = "800" border = "1" cellpadding = "10">
    <tr align = center>
      <td bgcolor = "#4374D9"></td>
      <td bgcolor = "#4374D9"><font color = "white">KT</font></td>
      <td bgcolor = "#4374D9"><font color = "white">SKT</font></td>
      <td bgcolor = "#4374D9"><font color = "white">LG U+</font></td>
    </tr>
    <tr align = center>
	  <?php
	  $category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT chulgo FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
            $sql2 = "SELECT chulgo FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
            $sql3 = "SELECT chulgo FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
			  $sql1 = "SELECT chulgo FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
              $sql2 = "SELECT chulgo FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
              $sql3 = "SELECT chulgo FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
		  }
	  ?>
      <td>정상가(a)</td>
      <td>
        <ul>
      <?php
          while($row1 = mysqli_fetch_array($result_kt)){
              echo "<li>$row1[chulgo]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row2 = mysqli_fetch_array($result_sk)){
              echo "<li>$row2[chulgo]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row3 = mysqli_fetch_array($result_lg)){
              echo "<li>$row3[chulgo]</li>";
          }
      ?>
        </ul>
      </td>
    </tr>
    <tr align = center>
<?php
	  $category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT gongshi FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
            $sql2 = "SELECT gongshi FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
            $sql3 = "SELECT gongshi FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
			  $sql1 = "SELECT gongshi FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
              $sql2 = "SELECT gongshi FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
              $sql3 = "SELECT gongshi FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
		  }
	  ?>
      <td>공시지원금(b)</td>
      <td>
        <ul>
      <?php
          while($row1 = mysqli_fetch_array($result_kt)){
              echo "<li>$row1[gongshi]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row2 = mysqli_fetch_array($result_sk)){
              echo "<li>$row2[gongshi]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row3 = mysqli_fetch_array($result_lg)){
              echo "<li>$row3[gongshi]</li>";
          }
      ?>
        </ul>
      </td>
    </tr>
    <tr align = center>
<?php
	  $category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT chuga FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
            $sql2 = "SELECT chuga FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
            $sql3 = "SELECT chuga FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
			  $sql1 = "SELECT chuga FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
              $sql2 = "SELECT chuga FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
              $sql3 = "SELECT chuga FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
		  }
	  ?>
      <td>추가지원금(c)</td>
      <td>
        <ul>
      <?php
          while($row1 = mysqli_fetch_array($result_kt)){
              echo "<li>$row1[chuga]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row2 = mysqli_fetch_array($result_sk)){
              echo "<li>$row2[chuga]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row3 = mysqli_fetch_array($result_lg)){
              echo "<li>$row3[chuga]</li>";
          }
      ?>
        </ul>
      </td>
    </tr>
    <tr align = center>
<?php
	  $category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT danmal FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
            $sql2 = "SELECT danmal FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
            $sql3 = "SELECT danmal FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
			  $sql1 = "SELECT danmal FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
              $sql2 = "SELECT danmal FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
              $sql3 = "SELECT danmal FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
		  }
	  ?>
      <td>판매가(c)</td>
      <td>
        <ul>
      <?php
          while($row1 = mysqli_fetch_array($result_kt)){
              echo "<li>$row1[danmal]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row2 = mysqli_fetch_array($result_sk)){
              echo "<li>$row2[danmal]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row3 = mysqli_fetch_array($result_lg)){
              echo "<li>$row3[danmal]</li>";
          }
      ?>
        </ul>
      </td>
    </tr>
	<tr align = center>
<?php
	  $category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT date FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
            $sql2 = "SELECT date FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
            $sql3 = "SELECT date FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
			  $sql1 = "SELECT date FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
              $sql2 = "SELECT date FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
              $sql3 = "SELECT date FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
		  }
	  ?>
      <td>공시일자</td>
      <td>
        <ul>
      <?php
          while($row1 = mysqli_fetch_array($result_kt)){
              echo "<li>$row1[date]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row2 = mysqli_fetch_array($result_sk)){
              echo "<li>$row2[date]</li>";
          }
      ?>
        </ul>
      </td>
      <td>
        <ul>
      <?php
          while($row3 = mysqli_fetch_array($result_lg)){
              echo "<li>$row3[date]</li>";
          }
      ?>
        </ul>
      </td>
    </tr>
  </table>
</body>
</html>

