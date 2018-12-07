<html>
    <meta charset="utf-8"/></head>
</html>
<?php
  require("function.php");
  require("config.php");
  $conn= db_init($config['host'],$config['duser']
          ,$config['dpasswd'],$config['dname']);

mysqli_query($conn,"set names utf8");
//if(isset($_POST['title'],$_POST['des'],$_POST['author']))

if(trim($_POST['title'])&&trim($_POST['des'])&&trim($_POST['author']))
{
  $sql = "INSERT INTO topic (title,description,author,created)
          VALUES('".$_POST['title']."', '".$_POST['des']."', '".$_POST['author']."', now())";
  mysqli_query($conn, $sql);
  echo "<script> alert('게시 되었습니다.');
  location.replace('http://210.117.181.22/termprj/s201515305/DBproject/index.php'); </script>"  ;

}
else{

  echo "<script> alert('리뷰내용이 입력되지 않았습니다.');
  location.replace('http://210.117.181.22/termprj/s201515305/DBproject/index.php'); </script>"  ;

}

?>
