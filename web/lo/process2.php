<?php

session_start();
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</html>
<?php
require("../config.php");
function db_init($host,$duser,$dpasswd,$dname){
  $conn=mysqli_connect($host,$duser,$dpasswd);
  mysqli_select_db($conn,$dname);
  return $conn ;
}

$conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);mysqli_query($conn,"set names utf8");
$sql= "SELECT * FROM user WHERE u_id ='{$_POST['id']}' AND u_passwd ='{$_POST['pw']}'" ;
//cho $sql ;
$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_assoc($result) ;

if((trim($_POST['id'])!=null)&&(trim($_POST['pw'])!=null)) //로그인 폼에의해 값이 전달됬다면,
{
    if($result->num_rows > 0) //id 및 psswd 가 DB에 존재 한다면
	{
      $_SESSION['is_login']=true;
      $_SESSION['id']=$row['u_name']; //이름을 하고싶음 'name'으로 바꿈
      $_SESSION['level']=1; //섹션의 레벨을 1로 지정, 관리자페이지.
      echo "<script> history.go(-1); </script>"  ;
      //header('Location: login.php');
  }
	else //id 및 psswd 가 DB에 존재하지않다면
	{
    echo "<script> alert('id또는pw가 존재하지 않습니다.'); history.go(-1);</script>"  ;
//    $_SESSION['msg']='wrong id or pw';
//    header('Location: ./login.php');
  }
}

else{ //로그인 폼에 아무정보도 저장되지 않을경우
    echo "<script> alert('아이디또는 패스워드가 입력되지않았습니다.'); history.go(-1);</script>"  ;
  //  $_SESSION['msg']='아이디 또는 패스워드가 입력되지 않았습니다.';
  	//header('Location:  http://210.117.181.22/termprj/s201515305/DBproject/lo/login.php');
}

?>
