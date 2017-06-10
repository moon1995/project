<?php
header("content-type:text/html,charset=utf-8");
$cate=$_POST['cate'];
sleep(3);
switch($cate){
	case "indre":
	echo '[{"id":1,"name":"jaon1","img":"h1.jpg"},{"id":2,"name":"jaon2","img":"h2.jpg"},{"id":3,"name":"jaon3","img":"h3.jpg"}]';
	break;
	case "company":
	echo '[{"id":1,"name":"saon1","img":"q1.jpg"},{"id":2,"name":"sjaon2","img":"q2.jpg"},{"id":3,"name":"sjaon3","img":"q3.jpg"}]';
	break;
	}
?>