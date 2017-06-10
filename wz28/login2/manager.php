<?php
session_start();
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php if($_SESSION['login']=="success"){
	?>欢迎<?PHP
	echo $_SESSION['username'];?>进入管理系统
	<a href="safeout.php">安全退出</a><?php
	}else{
		echo "<script type='text/javascript'>location.href='error.php'</script>";
		}?>
</body>
</html>
