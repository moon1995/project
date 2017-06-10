<?php
header("content-type:text/html;charset=utf-8");
sleep(2);
$conn=@mysql_connect("localhost","root","") or die("db connect error");
mysql_select_db("user",$conn);
mysql_query("set names utf8");
$infoid=$_POST['infoid'];
$rs=mysql_query("select * from products where infoid='$infoid'");
echo '[';
$json="";
while($info=mysql_fetch_array($rs)){
$json='{"impath":'.'"'.$info["impath"].'","intro":'.'"'.$info["info"].'"},';
}
echo substr($json,0,strlen-1).']';
?>