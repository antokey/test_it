<?php
session_start();
require("function.php");
require("config.php");
$conn= db_init($config['host'],$config['duser']
        ,$config['dpasswd'],$config['dname']);
//식제예정구간
mysqli_query($conn,"set names utf8"); //http://blog.daum.net/jhdreamy/4767037

  if(empty($_GET['id'])==false){ //아이디값이 없을때는 가져오지 않음.
    $sql = 'SELECT title,author,description,created
    FROM topic WHERE id='.$_GET['id'] ;
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result) ;
    echo '<h2>'.'제목:'.htmlspecialchars($row['title']).'</h2>' ;
    //htmlspecialchars 함수는 작성된 스크립트 태그를 그대로 나태내준다. 문자열로
    echo '<p>' .'글쓴이:' . htmlspecialchars($row['author']).'</p>' ;
    echo '<p>' .'작성일:' . htmlspecialchars($row['created']).'</p>'  ;
    echo '내용:' ;
    echo strip_tags($row['description'],'<ol><ul><li><a><h1><h2><h3><h5>') ;
    echo '<br>';
    //strip_tags 는 html태그를 없 애주며 두번째 인자로서 선택적으로 허용할 수 있디.
  }

  if($_SESSION['level']>=1){ //세션 레벨이 1이상이라면
    
    echo '<a href="http://210.117.181.22/termprj/s201515305/DBproject/delete_review.php?del_id='.$_GET['id'].'" class="btn btn-danger btn-default">삭제</a>'.'<br>';
  }

 ?>
 <html>
     <meta charset="utf-8"/></head>
 </html>
