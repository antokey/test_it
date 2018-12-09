<?php

function db_init($host,$duser,$dpasswd,$dname){
  $conn=mysqli_connect($host,$duser,$dpasswd, $dname);
  if(mysqli_connect_errno()){
	  echo "DB error";
  }
  return $conn ;
}

function print_article ($sql,$conn)
{
  $c = 0;
  $result=mysqli_query($conn,$sql);
  if($result->num_rows > 0){ //결과값이 있을경우
    echo    '<table class="table table-striped" >
             <thead  >
               <tr>
                 <th scope="col">번호</th>
                 <th scope="col">사진</th>
                 <th scope="col">상품명</th>
                 <th scope="col">규격</th>
               </tr>
             </thead>' ;
      while($row = mysqli_fetch_assoc($result))
      {
        $c++;
        ?>
         <tbody>
           <tr style="line-height: 200px;">
            <th style="line-height: 100px;" scope="row"><?php echo $c;?></th>
             <td><?php echo '<img class="img-thumbnail" src="'.$row['URL'].'" height="100" width="100px"/>';?></td>
             <td style="line-height: 100px;"><?php echo '<a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?p_id='.$row['p_id'].'">'
             .htmlspecialchars($row['p_name']).'</a>' ;?></td>
             <td style="line-height: 100px;"><?php echo htmlspecialchars($row['p_size']); ?></td>
           </tr>
         </tbody>
         <?php
        /* echo '<h3>'.'<a href="http://210.117.181.22/termprj/s201515305/DBproject/index.php?p_id='.$row['p_id'].'">'
        .'<img class="img-thumbnail" src="'.$row['URL'].'" height="250" width="250px"/>'.'<br>'
        .'<p >'.'상품명:'.htmlspecialchars($row['p_name']).'</a>'.'</h3>'
        .' 규격:' . htmlspecialchars($row['p_size']).'</p>'; */
        //htmlspecialchars 함수는 작성된 스크립트 태그를 그대로 나태내준다. 문자열로
        //strip_tags 는 html태그를 없애주며 두번째 인자로서 선택적으로 허용할 수 있디.
        //echo strip_tags($row['description'],'<ol><ul><li><a><h1><h2><h3><h5>') ;
      } echo '</table>';

  }
  else{
    echo "<br><br>찾으시는 상품이 없습니다.";
  }

}


function alter_table($val)
{
   switch($val){

      case 1:
         return "store_lib" ;

      case 2:
         return "store_com" ;

      case 3:
         return "store_center_lib" ;
   }

}

function is_exist ($conn)
{


  $sql = 'SELECT *  FROM store_lib WHERE p_id='.$_GET['p_id'] ;
  $result=mysqli_query($conn,$sql);
  if($result->num_rows > 0)
  {
      echo "[학습도서관] 지점에서 판매중"."<br>";
      require('Map_info\store_lib.html') ;
      echo "<br>";
  }
  $sql = 'SELECT * FROM store_com WHERE p_id='.$_GET['p_id'] ;
  $result=mysqli_query($conn,$sql);
  if($result->num_rows > 0)
  {
      echo "[상대도서관] 지점에서 판매중"."<br>";
      require('Map_info\store_com.html') ;
      echo "<br>";
  }

  $sql = 'SELECT * FROM store_center_lib WHERE p_id='.$_GET['p_id'] ;
  $result=mysqli_query($conn,$sql);
  if($result->num_rows > 0)
  {
      echo "[중앙도서관] 지점에서 판매중"."<br>";
      require('Map_info\store_center_lib.html') ;
      echo "<br>";
  }
}


function update($conn,$pid){
  echo "<script>alert('수정');</script>" ;
  mysqli_query($conn,"UPDATE product SET p_name = '정지은',p_size = '311152' WHERE p_id=".$pid );

}


 ?>
 <script>
 function search1(){
   if(frm1.search.value ){

     frm1.submit();


   }else{

     alert('검색어를 입력 해 주세요.');

   }
 }

 </script>
