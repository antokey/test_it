<?php
//  session_start();
  require("db_config.php");
  require("function.php");
  $conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
  mysqli_query($conn,"set names utf8");

  $name='jieun';
  $telecom='kt';

  $result=mysqli_query($conn,'SELECT * FROM update_data WHERE name ="'.$name.'" ORDER BY id DESC'); 

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
      
      document.write("<br/><b>Normal Object</b><br/>");
      for(var a=0; i<=arr2.length; a++) {
        document.write(a, " : ", arr2[a], "<br/>"); 
        //for(var b in arr2[a]) {
       //}
      }

      for(var a in arr) {
        for(var b in arr[a]) {
        document.write(a, " : ", arr2, "<br/>"); 
       }
      }
      document.write("<br/><b>Normal Object22</b><br/>"); 



      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();

      data.addColumn('string', 'Day');
      data.addColumn('number', 'price');
      for (var i = 0; i <3; i++) {
        data.addRow(['aa',3]); //here is values to change [data,price]

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


<!--function drawChart() {
      /* Array and Object Definition */ 
      var arr = [ "Yongwoo", 25, "Catholic Univ, of Korea", "Computer Science" ]; 
      var obj = { "NAME" : "Yongwoo", "AGE" : 25, "UNIVERSITY" : "Catholic Univ, of Korea", "MAJOR" : "Computer Science" };
            /* Array and Object Value Check */ 
            document.write("<b>Normal String Arrary :</b> ", obj2, "<br/>"); 

       // var price = '<?= $row[6] ?>';
     // var date = <?= $row[7] ?>;
      //var date = <?= json_encode($arr) ?>;


        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses','aaa'],
          ['2004',  1000,      400,      400],
          ['2005',  1170,      460,      400]
        ]);
        
      function drawChart() { 
        var data = new google.visualization.DataTable(); 
        data.addColumn('string', 'Cluster'); 
        data.addColumn('number', 'Loans'); 
        data.addColumn('number', 'Lines');       
        data.addRows(3); 
        data.setCell(0, 0, 'Tong Ning mu'); 
        data.setCell(1, 0, 'Huang Ang fa'); 
        data.setCell(2, 0, 'Teng nu'); 
        data.setCell(0, 1, 174); 
        data.setCell(1, 1, 523); 
        data.setCell(2, 1, 86); 

             /* data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);*/
-->

