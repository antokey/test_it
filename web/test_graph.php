<?php
/*  session_start();
  require("db_config.php");
  require("function.php");
  $conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
  mysqli_query($conn,"set names utf8");
*/
  $name='jieun';
  $telecom='kt';

 # $result=mysqli_query($conn,'SELECT * FROM update_data WHERE name ='.$name.' ORDER BY id DESC'); 
  echo 'SELECT * FROM update_data WHERE name ='.$name.' ORDER BY id DESC' //데이터 조회
 ?>

 <html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses','aaa'],
          ['2004',  1000,      400,      400],
          ['2005',  1170,      460,      400]
        ]);

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
 


<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load('visualization', '1', {packages: ['corechart'],'language':'ko'});

    function drawVisualization(dataFromAjax) {
         var data = google.visualization.arrayToDataTable(dataFromAjax);
         new google.visualization.ColumnChart(document.getElementById('map')).
         draw(data, {fontName: "맑은 고딕, Malgon Gothic", 
                fontSize: 11,
                forceIFrame: false,
                vAxis: {maxValue: 100}}
           );
    }
    function drawInit()
    {
         var data = null;
         var table_data = null;


         $.ajax({
             url:'data.jsp',
             data: {},
             success: function(res) {
                 table_data = eval("(" + res + ")");
                 drawVisualization(table_data);
             }
        });
    }
    
    google.setOnLoadCallback(drawInit);
 
    setInterval(function() { drawInit(); }, 3000);
</script> 

<div id="map"></div>