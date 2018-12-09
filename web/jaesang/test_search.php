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
<<<<<<< HEAD
  <?php
  		$category = $_GET['phone_select'];
          if($category == 'phone_name'){
            $keyword = $_GET['search'];

            $sql1 = "SELECT * FROM kt WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
            $sql2 = "SELECT * FROM sk WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
            $sql3 = "SELECT * FROM lg WHERE REPLACE(name, ' ', '') LIKE '%$keyword%'";
=======
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
>>>>>>> 2f6c154ee481ab3b9d9ed47469bbda32084ae4b9

            $result_kt = mysqli_query($conn, $sql1);
            $result_sk = mysqli_query($conn, $sql2);
            $result_lg = mysqli_query($conn, $sql3);
<<<<<<< HEAD
			
			$cnt_kt = mysqli_num_rows($result_kt);
			$cnt_sk = mysqli_num_rows($result_sk);
			$cnt_lg = mysqli_num_rows($result_lg);
			
			$max = max($cnt_kt, $cnt_sk, $cnt_lg);
			
			while($row1 = mysqli_fetch_array($result_kt)){
              $temp1[] = $row1;
			}
			
			echo "이중배열 확인\n";
			print_r($temp1);
			echo "이중배열 확인끝\n";
			
			while($row2 = mysqli_fetch_array($result_sk)){
              $temp2[] = $row2;
            }
			
			while($row3 = mysqli_fetch_array($result_lg)){
              $temp3[] = $row3;
            }
=======
>>>>>>> 2f6c154ee481ab3b9d9ed47469bbda32084ae4b9
		  }
		  else if($category == 'phone_model'){
			  $keyword = $_GET['search'];
			  
<<<<<<< HEAD
			  $sql1 = "SELECT * FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%'";
              $sql2 = "SELECT * FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%'";
              $sql3 = "SELECT * FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%'";
=======
			  $sql1 = "SELECT chulgo FROM kt WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY kt.chulgo ASC";
              $sql2 = "SELECT chulgo FROM sk WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY sk.chulgo ASC";
              $sql3 = "SELECT chulgo FROM lg WHERE REPLACE(model, ' ', '') LIKE '%$keyword%' ORDER BY lg.chulgo ASC";
>>>>>>> 2f6c154ee481ab3b9d9ed47469bbda32084ae4b9
			  
			  $result_kt = mysqli_query($conn, $sql1);
              $result_sk = mysqli_query($conn, $sql2);
              $result_lg = mysqli_query($conn, $sql3);
<<<<<<< HEAD
			  
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
      <td bgcolor = '#4374D9'></td>
      <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>SKT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>LG U+</font></td>
    </tr>
    <tr align = center>";
		echo "
		<td>정상가(a)</td>
		<td>";
			echo $temp1[0][3];
		echo"</td>
		<td>";
			echo $temp2[0][3];
		echo"</td>
		<td>";
			echo $temp3[0][3];
		echo"</td>
	</tr>
	<tr align = center>
		<td>공시지원금(b)</td>
		<td>";
			echo $temp1[0][4];
		echo"</td>
		<td>";
			echo $temp2[0][4];
		echo"</td>
		<td>";echo $temp3[0][4];
		echo"</td>
	</tr>
	<tr align = center>
		<td>추가지원금(c)</td>
		<td>";echo $temp1[0][5];echo"</td>
		<td>";echo $temp2[0][5];echo"</td>
		<td>";echo $temp3[0][5];echo"</td>
	</tr>
	<tr align = center>
		<td>판매가(c)</td>
		<td>";echo $temp1[0][6];echo"</td>
		<td>";echo $temp2[0][6];echo"</td>
		<td>";echo $temp3[0][6];echo"</td>
	</tr>
	<tr align = center>
		<td>공시일자</td>
		<td>";echo $temp1[0][7];echo"</td>
		<td>";echo $temp2[0][7];echo"</td>
		<td>";echo $temp3[0][7];echo"</td>
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
=======
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

>>>>>>> 2f6c154ee481ab3b9d9ed47469bbda32084ae4b9
