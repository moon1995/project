<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>欢迎登录</title>
</head>

<body>
<?php
$userName=$_COOKIE['userName'];
$pwd=$_COOKIE['pwd'];
if(!empty($userName) and !empty($pwd)){
	$rs=mysql_query("select * from users where userName='$userName' and pwd='$pwd'");
	$num=mysql_num_rows($rs);
  if($num>0){
	  $_SESSION['login']="success";
	  $_SESSION['userName']=$userName;
	  echo "<script type='text/javascript'>location.href='manage.php';</script>";  
 }	
}

?>
<form name="login" action="check.php" method="post">
用户名:
<input type="text" name="userName">
<br>
密码:
<input type="password" name="pwd">
<br>
<input type="checkbox" name="info" value="yes">是否保存用户信息10天
<br>
<input type="submit" name="submit" value="登录">
</form>
</body>
</html>