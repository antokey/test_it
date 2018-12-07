<html>
    <meta charset="utf-8"/></head>
</html>
<?php
require("config.php");
require("function.php");
$conn= db_init($config['host'],$config['duser']
        ,$config['dpasswd'],$config['dname']);
mysqli_query($conn,'DELETE FROM product WHERE p_id ='.$_GET['del_id']  );

echo "<script> alert('삭제되었습니다.'); location.replace('http://210.117.181.22/termprj/s201515305/DBproject/index.php');  </script>"  ;
//header('Location: http://210.117.181.22/termprj/s201515305/DBproject/index.php');

?>
