<?php
header("content-type:text/html;charset=utf-8");

$userName=$_POST['userName'];
$database="wangsan李四孙子";
  if(strstr($database,$userName)){
	echo '1';
	}
	else{
		echo '0';}
?>