<?php  session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>图书管理系统后台</title>
<style>
span{
	color:#f00;
}
</style>
</head>

<body>
<?php if($_SESSION['login']=='success'){  ?>
欢迎[<span><?php echo $_SESSION['userName']; ?></span>]图书管理系统后台
<br>
<a href="loginout.php">注销</a> | <a href="safeout.php">安全退出</a>
<?php 
  }else{
	echo "<script type='text/javascript'>location.href='error.php';</script>";
	} ?>
</body>
</html>