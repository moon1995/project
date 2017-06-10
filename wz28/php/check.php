<?php 
header("content-type:text/html;charset=utf-8");
//以变量等于值接收数据
$user=$_GET['user'];
$pwd=$_GET['pwd'];
$kemu=$_GET['kemu'];
$sex=$_GET['sex'];
$city=$_GET['city'];
echo $user.":".$pwd."<br>".$sex."<br>".$city."<br>q";
foreach($kemu as $value){
	echo $value."<br>";
	}
?>