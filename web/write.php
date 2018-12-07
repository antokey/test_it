<?php
  session_start();
  require("config.php");
  require("function.php");
  $conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
  mysqli_query($conn,"set names utf8");

  $result=mysqli_query($conn,'SELECT * FROM topic ORDER BY  created DESC'); //리뷰 DB
  //데이터 조회

 ?>
 <!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8" >
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" href="http://210.117.181.22/termprj/s201515305/DBproject/css/style.css">
  <link rel="stylesheet" href="http://210.117.181.22/termprj/s201515305/DBproject/css/style3.css">
  <title>JBNU_CU</title>

</head>
 <!-- Bootstrap -->
 <link href="http://210.117.181.22/termprj/s201515305/DBproject/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
 <?php  require("lo/login.php"); ?>
 <body id="b" >
   <div class="container-fluid">
     <header class="jumbotron text-center" style = "margin-bottom: 0px">
       <a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php" ><img class="img-circle"src="http://cu.bgfretail.com/images/facebook.jpg"/>
       <h1><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php">JBNU_CU</a></h1></a>
     </header>

     <div class="menubar">
        <ul class="center">
           <li class="center"><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=1">학도점</a>
             <ul>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=1&c_id=A">음료</a></li>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=1&c_id=B">도시락</a></li>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=1&c_id=C">제과</a></li>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=1&c_id=D">햄버거</a></li>
             </ul>
           </li>
           <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=2" id="current">상대점</a>
                <ul>
                  <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=2&c_id=A">음료</a></li>
                  <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=2&c_id=B">도시락</a></li>
                  <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=2&c_id=C">제과</a></li>
                  <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=2&c_id=D">햄버거</a></li>
                </ul>
           </li>
           <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=3">중도점</a>
             <ul>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=3&c_id=A">음료</a></li>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=3&c_id=B">도시락</a></li>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=3&c_id=C">제과</a></li>
               <li><a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?store=3&c_id=D">햄버거</a></li>
              </ul>
           </li>

        </ul>
     </div>
     <div style="text-align:-webkit-right; height: 25px;">
         <form method=GET name=frm1 action='index.php' class = "search">
         <label > [물품 검색]</label>
         <select name="store_select" style="height: 20px;">
             <option value="all" selected="selected">지점선택</option>
             <option value="store_lib">학도점</option>
             <option value="store_com" >상대점</option>
             <option value="store_center_lib">중도점</option>
         </select>
         <input type=text size=45 name=search placeholder="검색어를 입력해주세요." style="width: 203px; height: 28px;">
         <input type=button name=byn1 onclick="search1()" class="btn btn-info btn-sm" value="찾기" style="margin-bottom: 5px;" >
         </form>
     </div>

    <div class="row">
      <nav class="col-md-3" style="width: 280px; margin-right:15px ;" >
          <h3>최근 리뷰</h3>

         <?php
         if($result->num_rows > 0){
           while($row = mysqli_fetch_assoc($result))//한행씩 row에 저장
           {
             echo '<li><a href="http://210.117.181.22/termprj/s201515305/DBproject/review_page.php?id='.$row['id'].'" target=_blank>'.htmlspecialchars($row['title']).'</li></a>';//."\n";
             echo "<br />";
           }
         }
          ?>
       <hr>
       <div id="control">
         <a href="http://210.117.181.22/termprj/s201515305/DBproject/write.php" class=" btn-default btn-success btn-lg ">리뷰쓰기</a>
       </div>
      </nav>
      <div class="col-md-9" style=" padding-top: 30px;">
            <article style="width: 700px;  padding-top: 40px; "> <!-- 본문영역 -->
               <form action="process.php" method="post" >
                   <div class="form-group">
                     <h3><리뷰 작성></h3><br>
                     <label for="form-title">제목</label>
                     <input type="text" class="form-control" name="title" id="form-title" placeholder="제목">
                   </div>

                   <div class="form-group">
                     <label for="form-author">작성자</label>
                     <input type="text" class="form-control" name="author" id="form-title" placeholder="작성자">
                   </div>

                   <div class="form-group">
                     <label for="form-des">본문</label>
                     <textarea class="form-control" rows=10 name="des" id="form-des" placeholder="내용"></textarea>
                   </div>
                 <input type="submit" name='name' class="btn btn-default ">
               </form>
             </article>
          </div>
    </div>
   </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://210.117.181.22/termprj/s201515305/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
 </body>
 </html>
