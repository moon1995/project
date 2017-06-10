<?php
header("content-type:text/html;charset=utf-8");//前面不能有任何html或输出，否则报错
$x=$_POST['userName'];
$y=$_POST['pwd'];
if($x=="sun" and $y=="123"){
	header("location:success.php");
	}else{
		echo "<script type='text/javascript'>
		alert('用户名或密码错');
		location.href='index.html';
		</script>";
		
		}
?>