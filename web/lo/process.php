<?php

require("../config.php");
require("../function.php");
$conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);
mysqli_query($conn,"set names utf8");

$sql= "SELECT * FROM user WHERE u_id ='{$_POST['id']}' AND u_passwd ='{$_POST['pw']}'" ;
echo $sql ;
$result = mysqli_query($conn,$sql) ;

if((trim($_POST['id'])!=null)&&(trim($_POST['pw'])!=null)) //로그인 폼에의해 값이 전달됬다면,
{
    if($result->num_rows > 0) //id 및 psswd 가 DB에 존재 한다면
	{
      $_SESSION['is_login']=true;
      $_SESSION['id']=$_POST['id'];
      $_SESSION['level']=1; //섹션의 레벨을 1로 지정, 관리자페이지
      header('Location: login.php');
  }
	else //id 및 psswd 가 DB에 존재하지않다면
	{
    $_SESSION['msg']='wrong id or pw';
    header('Location: ./login.php');
  }
}

else{ //로그인 폼에 아무정보도 저장되지 않을경우
    $_SESSION['msg']='아이디 또는 패스워드가 입력되지 않았습니다.';
  	header('Location: ./login.php');
}
?>
