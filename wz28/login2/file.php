<?php
header("content-type:text/html;charsetutf-8");
//readfile("1.html");
/*
$filename="text1.html";
include("conn1.php");
$rs=mysql_query("select * from article");
while($info=mysql_fetch_array($rs)){
	$str.=$info['article1'].$info['content'].$info['article2'];
	}
$fopen=fopen($filename,"wb");
fwrite($fopen,$str);
fclose($fopen);
readfile($filename);

	$filename = "text.txt";
	$fp = fopen($filename,"rb");
	echo fread($fp,6);
	echo "<hr>";
	echo fread($fp,filesize($filename));
	fclose($fp);*/
	$filename="text.txt";
	$str="不好好学习,天天向上";
	$fopen=fopen($filename,"wb");
	fwrite($fopen,$str);
	fclose($fopen);
	readfile($filename);
	
?>
