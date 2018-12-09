<?php
//  session_start();
  require("db_config.php");
  require("function.php");
  $conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
  mysqli_query($conn,"set names utf8");

  $model='jieun'; # here is place to put seach keyword
  $tel='kt';  # here is place to put seach keyword
  $result=mysqli_query($conn,'SELECT * FROM update_data WHERE model ="'.$model.'" and telecom="'.$tel.'" ORDER BY id DESC'); 

  while($row = mysqli_fetch_array($result)) {
    $temp[]=$row;
  }
  print_r ($temp); 
 ?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>      
    <script type="text/javascript"> 

      var arr2 = <?= json_encode($temp) ?>;
      /*
      document.write("<br/><b>Normal Object</b><br/>");
      for(var a=0; a<=arr2.length; a++) {
        for(var b in arr2[a]) {
          document.write(b, " : ", arr2[a][b], "<br/>"); 
       }
      }
      */
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();

      data.addColumn('string', 'Day');
      data.addColumn('number', 'price');
      for(var a=0; a<arr2.length; a++) {
        data.addRow([arr2[a]['date'],Number(arr2[a]['danmal'])]);  
      }      

      var options = {
        title: 'Test_graph',
        width: 900,
        height: 500,
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
    
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>



