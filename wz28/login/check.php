<?php
header("content-type:text/html;charset=utf-8");
if($_SERVER['REQUEST_METHOD']=='POST'){
	//进行用户名和密码验证
	include("conn.php");
	$userName=$_POST['userName'];
	$pwd=$_POST['pwd'];
	$info=$_POST['info'];
	$rs=mysql_query("select * from users where userName='$userName' and pwd='$pwd'");
	$num=mysql_num_rows($rs);
	if($num>0){
		session_start();
		$_SESSION['login']='success';
		$_SESSION['userName']=$userName;
		if($info=="yes"){
		  setcookie("userName",$userName,time()+3600*24*10);
		  setcookie("pwd",$pwd,time()+3600*24*10);	
		}
		header("location:manage.php");
		}else{
			echo "<script type='text/javascript'>alert('用户名或密码错误');history.go(-1);</script>";
			}
}else{
  header("location:error.php");	
}
?>