<?php
	header("content-type:text/html;charset=utf-8");
$cate=$_POST['cate'];
sleep(5);
switch($cate){
	case "ina":
	echo '[{"name":"这是业内","li":"你知道我有多爱你吗","img":"../images/h1.jpg"},{"name":"这是行内2","li":"你知道我有多爱你吗,你爱我么","img":"../images/h2.jpg"},{"name":"这是行内3","li":"你知道我有多爱你吗","img":"../images/h3.jpg"}]';
	break;
	case "con":
	echo '[{"name":"这是业wai","li":"你不知道","img":"../images/q1.jpg"},{"name":"这是行内2","li":"你知道我有多爱你吗,你爱我么","img":"../images/q2.jpg"},{"name":"这是行内3","li":"你知道我有多爱你吗","img":"../images/q3.jpg"}]';
    break;
}
?>