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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
  <title>JBNU_CU</title>

</head>
 <!-- Bootstrap -->
 <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
 <?php  require("lo/login.php"); ?>
 <body id="b" >
   <div class="container-fluid">
     <header class="jumbotron text-center" style = "margin-bottom: 0px">
       <a href="index.php" ><img class="img-circle"src="http://cu.bgfretail.com/images/facebook.jpg"/>
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
          <article > <!-- 본문영역 -->
            <div> <!-- 상품목록을 카테고리,스토어번호에 따라 나열해줌 -->
            <?php
            if(empty($_GET['store'])==false ) //store 에 정보가 있다면
            {
              $store=alter_table($_GET['store']);

              if(empty($_GET['c_id'])==false ) //카테고리 정보가있다면
              {

                $c_id = $_GET['c_id'] ;
                //a 음료 b 도시락 c제과 d 햄버거
                //echo $store."점의".$c_id."카테고리 입니다";
                $sql = "SELECT *  FROM {$store} JOIN  product ON  product.c_id = '{$c_id}' AND product.p_id = {$store}.p_id" ;
                print_article ($sql,$conn);
              }
              else //카테고리 정보가없다면 모두 출력
              {
                //echo $store."점입니다";
                $sql = "SELECT *  FROM {$store} JOIN  product ON product.p_id = {$store}.p_id" ;
                print_article ($sql,$conn);

              }

            }
            ?>
            </div>

           <!-- p_id에 따른 상품 상세 페이지 -->
            <?php
            if(empty($_GET['p_id'])==false){ //p_id값이 인자로 전달됬다면 사진과 함께 규격 및 상세 정보페이지  출력

            echo  '<div class="pro_detail">' ; // p_id정보가 있어야만 style적용
              if($_SESSION['level']>=1){ //세션 레벨이 1이상이라면
                //  echo '섹션레벨:'.$_SESSION['level'].'<br>' ;
                echo '<a  href="http://210.117.181.22/termprj/s201515305/DBproject/update.php?update_id='.$_GET['p_id'].'" class="btn btn-warning btn-default">수정</a>
                      <a href="http://210.117.181.22/termprj/s201515305/DBproject/delete.php?del_id='.$_GET['p_id'].'" class="btn btn-danger btn-default">삭제</a>'.'<br>';
                  }

              $result=mysqli_query($conn,'SELECT *  FROM  product WHERE p_id ='.$_GET['p_id'] );
              $row = mysqli_fetch_assoc($result);
              echo '<div  class="img-thumbnail" style=" padding-left: 30px; padding-right: 30px;"><h3>'
              .'<img class="img-thumbnail" src="'.$row['URL'].'" height="250"/>'.'<br>'.'<br>'
              .'<p>'.'상품명:'.htmlspecialchars($row['p_name']).'<br>'.'</h3>'
              .' 규격:' . htmlspecialchars($row['p_size']).'</p>'.'</div>'.'<br><br>' ;

              is_exist ($conn); // 어느 지점에서 파는지여부 및 지도
            }
            echo '</div>' ;
            ?>

            <?php
            if(isset($_GET['search'])){ //값이 존재한다면 해당제품의 목록을 출력.
             echo "<div class='col-md-9' style='margin-top: 20px;'>" ;
                    $search=$_GET['search'];
                    if($_GET['store_select']==all) //선택박스가 전체일시
                      $sql ="SELECT * FROM product WHERE p_name LIKE '%$search%'";
                    else{//선택박스가 특정 지점일 경우
                      $store = $_GET['store_select'] ;
                      $sql="SELECT *  FROM {$store} JOIN  product ON  product.p_id = {$store}.p_id WHERE p_name LIKE '%$search%'";
                    }
                    print_article ($sql,$conn);
             echo "</div>" ;
          }
          echo '<div class="col-md-9" >' ;
            if ( empty($_GET['store']) && empty($_GET['p_id']) && empty($_GET['search']) ) //아무 인자도 전달되지않음>메인페이지문구
              echo "<hr>환영합니다.<br> 전북대 학습도서관점,상대점,중앙도서관 점의 상품을 알려드립니다.<br>
                    상품의 규격은 음료수일경우 ml 그외는 g입니다.^_^" ;
          echo "</div>";
            ?>
          </article>
      </div>
    </div>
   </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://210.117.181.22/termprj/s201515305/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
 </body>
 </html>
