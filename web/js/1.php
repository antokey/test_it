<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div>

      <form method=GET name=frm1 action='1.php'> [물품 검색]
      <input type=text size=45 name=search>
      <input type=button name=byn1 onclick="search1()" value="찾기">
      </form>
  </div>

  </body>
  <script>
  	function search1(){
  		if(frm1.search.value ){

  			frm1.submit();


  		}else{

  			alert('값을 입력 해 주세요.');

  		}
  	}
  </script>

</html>
<?php
require("function.php");
require("config.php");
$conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);



if(isset($_GET['search'])){ //값이 존재한다면

        $sel=$_GET['kind'];
				$search=$_GET['search'];
        $sql ="SELECT * FROM store_lib JOIN  product ON product.p_id = store_lib.p_id AND  product.p_name LIKE '%$search%'";
        print_article ($sql,$conn);

}

 ?>
