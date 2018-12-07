<html>
    <meta charset="utf-8"/></head>
</html>
<?php
require("config.php");
require("function.php");
$conn= db_init($config['host'],$config['duser']
        ,$config['dpasswd'],$config['dname']);
mysqli_query($conn,"set names utf8");
//각 폼에 입력값이 있어야함
if(trim($_POST["update_id"])&&trim($_POST["p_name"])&&trim($_POST["p_size"])&&trim($_POST["URL"]))
{
  $sql = "UPDATE product SET p_name ='".$_POST["p_name"]."',p_size ='".$_POST["p_size"]."',URL='".$_POST["URL"]."' WHERE p_id=".$_POST["update_id"] ;
  //echo $sql;
  mysqli_query($conn,$sql);
  echo "<script> alert('수정되었습니다.');
  location.replace('http://210.117.181.22/termprj/s201515305/DBproject/index.php'); </script>"  ;

}
else {

  echo "<script> alert('수정내용이 입력되지 않았습니다.');
  location.replace('http://210.117.181.22/termprj/s201515305/DBproject/index.php'); </script>"  ;

}

?>
