<?php
    session_start();
?>

<html>
    <meta charset="utf-8"/></head>
</html>

<?php
if(isset($_SESSION['is_login'])){//로그인이 되어있다면 별명 출력,로그아웃 창 출력

  echo  '<form action="http://210.117.181.22/termprj/s201515305/DBproject/lo/logout.php" method=POST>
        <p style="text-align:right;margin-bottom: -4;margin-top: 8px;">
        ['.$_SESSION['id'].']님 환영합니다.
        <input type="submit" value="Logout" class="btn btn-info btn-sm"/></form></p>';

}
else {
  echo
  " <body>
      <form action='http://210.117.181.22/termprj/s201515305/DBproject/lo/process2.php' method='POST'> <!-- 로그인 폼 -->
          <p style='text-align:right; margin-bottom: -4;margin-top: 8px;'>[ID]
          <input type='text'name='id' />
          [PW]
          <input type='password'name='pw' />
          <input type='submit' value='Login' class='btn btn-info btn-sm'/> <!-- 프로세스 php로 이동 -->
  		</p>
      </form>
  </body>" ;

}
?>
