<?php
header("content-type:text/html;charset=utf-8");
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("conn.php");
$article1='<doctype html><html><head><title>我的博客</title><meta charset="utf-8" /></head><body>';
	$content=$_POST['elm1'];
	$article2='</body></html>';
	$num=mysql_query("insert into article(article1,content,article2,addTime) values('$article1','$content','$article2',now())");

	if($num>0){
		echo "发布成功";
		}else{
		echo "发布失败";	
		}
	}

?>
