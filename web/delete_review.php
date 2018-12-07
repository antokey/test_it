<html>
    <meta charset="utf-8"/></head>
</html>
<?php
require("config.php");
require("function.php");
$conn= db_init($config['host'],$config['duser']
        ,$config['dpasswd'],$config['dname']);
mysqli_query($conn,'DELETE FROM topic WHERE id ='.$_GET['del_id']  );

echo "<script> alert('삭제되었습니다.'); self.close(); </script>"  ;

?>
