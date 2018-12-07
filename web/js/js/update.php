<html>
    <meta charset="utf-8"/></head>
    <link href="http://210.117.181.22/termprj/s201515305/DBproject/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <article style="width: 500px;"> <!-- 본문영역 -->
       <form action="process_update.php" method="post">
         <div class="form-group">
           <label for="form-title">상품코드</label>
           <?php echo '<input readonly type="text" class="form-control" name="update_id" id="form-title"  value="'.$_GET['update_id'].'">' ; ?>
         </div>

           <div class="form-group">
             <label for="form-title">수정할 상품명</label>
             <input type="text"  class="form-control" name="p_name" id="form-title" placeholder="상품명">
           </div>
           <div class="form-group">
             <label for="form-author">수정할 규격</label>
             <input type="text" class="form-control" name="p_size" id="form-title" placeholder="규격">
           </div>
           <div class="form-group">
             <label for="form-des">수정할 이미지 URL</label>
             <textarea class="form-control" rows=10 name="URL" id="form-des" placeholder="내용"></textarea>
           </div>
         <input type="submit" name='name' class="btn btn-default ">
       </form>
     </article>
</html>

<!--http://jwizard.tistory.com/35 폼비활성화-->
