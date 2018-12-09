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
             <option value="all" selected="selected">지점선택</option>
             <option value="phone_name">핸드폰명</option>
             <option value="phone_model" >모델명</option>
         </select>
         <input type=text size=45 name=search placeholder="검색어를 입력해주세요." style="width: 203px; height: 28px;">
          <!-- <input type=submit class="btn btn-info btn-sm" value="검색" style="margin-bottom: 5px;" >-->
          <input type=button name=byn1 onclick="search1()" class="btn btn-info btn-sm" value="Search" style="margin-bottom: 5px;" > 
         </form>
     </div>
    <div class="row">

      <div class="col-md-9" style=" padding-top: 30px;">
          <article > <!-- 본문영역 -->
            <div class="col-md-9" >' ;
                  <hr>환영합니다.<br>.^_^" ;
              <?php
              if(empty($_GET['phone_select'])==false & empty($_GET['search'])==false ) //phone_select 에 정보가 있다면
              {
                $get=$_GET['phone_select'];
                $sh=$_GET['seach'];
                if($get=='phone_name') // 'phone_name'
                {
                  echo "ph_name";
                  //print_article ($sql,$conn);
                }
                else // 'phone_model'
                {
                  echo "ph_model";
                  //$sql = "SELECT *  FROM {$store} JOIN  product ON product.p_id = {$store}.p_id" ;
                  //print_article ($sql,$conn);

                }
              }
 
              //print_graph ('jieun','kt',$conn);

              ?>
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>      
              <script type="text/javascript">
                draw_graph(); 
                d();
              </script>
 


            </div> 
          </article>
      </div>
    </div>
   </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://210.117.181.22/termprj/s201515305/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
 </body>
 </html>
