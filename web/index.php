<?php
  require("function.php");
  require("db_config.php");
  $conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
  mysqli_query($conn,"set names utf8");
?>
 <!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8" >
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
  <title>JE_JS_PHONE</title>

</head>
 <!-- Bootstrap -->
 <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
 <body id="b" >
   <div class="container-fluid">
     <header class="jumbotron text-center" style = "margin-bottom: 0px">
       <a href="index.php" ><img class="img-circle"src="https://www.techlicious.com/images/phones/smartphone-money-shutterstock-510px.jpg"/>
       <h1><a href="http://210.117.181.26:8080/index.php">JE_JS_PHONE</a></h1></a>
     </header>
     <div style="text-align:-webkit-right; height: 25px;">
         <form method=GET name=frm1 action='index.php' class = "search">
         <label > [검색]</label>
         <select name="phone_select" style="height: 20px;">
             <option value="all" selected="selected">검색 옵션</option>
             <option value="name">핸드폰명</option>
             <option value="model" >모델명</option>
         </select>
         <input type=text size=45 name=search placeholder="검색어를 입력해주세요." style="width: 203px; height: 28px;">
          <!-- <input type=submit class="btn btn-info btn-sm" value="검색" style="margin-bottom: 5px;" >-->
          <input type=button name=byn1 onclick="search1()" class="btn btn-info btn-sm" value="Search" style="margin-bottom: 5px;" > 
         </form>
     </div>
    <div class="row">
      <nav class="col-md-3" style="width: 200px; margin-right:15px ;" >

      </nav>

      <div class="col-md-9" style=" padding-top: 30px;">
          <article > <!-- 본문영역 -->
            <!--<div class="col-md-3" >-->
                 
              <?php
              if(empty($_GET['phone_select'])==false & empty($_GET['search'])==false ) //phone_select 에 정보가 있다면
              {
                $get=$_GET['phone_select'];
                $search_keyword=$_GET['search'];
                $search_keyword=preg_replace("/\s+/","",$search_keyword);  //remove space code
                if($get=='name') // 'phone_name'
                {
                  load_result_by_keword($conn,$search_keyword,$get);

                }
                else if($get=='model') // 'phone_model'
                {
                  load_result_by_keword($conn,$search_keyword,$get);

                }
                else
                {
                  echo "<script> alert('검색옵션을 선택해주세요.');</script>";
                }
              }
              else
                {
                  echo "<hr>환영 합니다.^_^ <br>
                  [제품명]으로 검색시 원하는 제품의 시그니처 넘버를 입력할경우 정확한 검색이 가능합니다.<br>
                  ex) 갤럭시 s7 -> s7 / 아이폰 8 plus ->8 plus <br>
                  [모델명]으로 검색시 맨 뒤의 통신사 코드는 빼고 검색해 주세요<br>
                  ex)SM-A750NK ->SM-A750N </hr>
                  ";

                  echo '<hr> 만약 당신이 저희 웹사이트의 소스코드를 확인하고 싶다면 버튼을 눌러 이동 해주세요.</hr> <a  href="https://github.com/antokey/test_it" class="btn btn-warning btn-default">go to git</a>';
                }            
                // $temp =  make_update_array('jieun','kt',$conn);

              ?>            
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   
              <script>
                var arr = <?= json_encode($temp) ?>;
                 draw_graph(arr); 
              </script>
              <body>
              <div id="line_top_x"></div>
              </body>
          </article>
      </div>
    </div>



   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   Include all compiled plugins (below), or include individual files as needed  
   <script src="http://210.117.181.22/termprj/s201515305/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>-->
 </body>
 </html>
