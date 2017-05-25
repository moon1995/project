<?php
$conn=@mysql_connect("localhost","root","") or die("db not connect");
mysql_select_db("myjy",$conn);
mysql_query("set names utf8");
?>
