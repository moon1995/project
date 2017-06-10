<?php
header("content-type:text/html;charset=utf-8");
include("conn.php");
$rs=mysql_query("select * from article");
$a="";
$b="<!doctype html><head><title>提取博客</title></head></body>";
while($info=mysql_fetch_array($rs)){
	$article=$info['article1'].$info['content'].$info['article2'];
	$filename=time().rand(1,1000).".html";
	$fp=fopen($filename,"wb");
	$a.="<a href=".$filename.">".$filename."</a><br>";
	fwrite($fp,$article);
	fclose($fp);
	};
	$b.=$a."</body></html>";
	$filename1="aa.html";
	$fp1=fopen($filename1,"wb");
	fwrite($fp1,$b);
	fclose($fp1);
header("location:aa.html");

?>