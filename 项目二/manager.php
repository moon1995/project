<?php
session_start();
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php if($_SESSION['login']=='success'){
	?>欢迎【
    
    <?php echo $_SESSION['username'];?>】
    <?php }else{
		echo '<script type="text/javascript">location.href="error.php"</script>';
		}?>
</body>
</html>
