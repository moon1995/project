<?php
$con=@mysql_connect("localhost","root","") or die("db connect error");
mysql_select_db("boke",$con);
mysql_query("set names utf8");
?>