
<?php
    require("function.php");
    require("db_config.php");
    $conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
    mysqli_query($conn,"set names utf8");

    $model=$_GET['model'];
    $tel = $_GET['tel'];
    $arr= make_update_array ($model,$tel,$conn);

?>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>      
    <script type="text/javascript"> 
        var arr = <?= json_encode($arr) ?>;
        if(arr.length)
            draw_graph(arr); 
        else 
        {
            alert('지원금의 갱신 내역이 없습니다.');
            // window.open('','_parent','');
             window.close();
        }
      </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>