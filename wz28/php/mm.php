<?php
function  jm($pwd){
	$pwd=str_replace("3","5",$pwd);
	$pwd=str_replace("f","b",$pwd);
	$pwd=str_replace("d","n",$pwd);
	$pwd=str_replace("0","6",$pwd);
	$pwd=str_replace("1","g",$pwd);
	$pwd=str_replace("a","s",$pwd);
	$pwd=str_replace("c","8",$pwd);
	return $pwd;
	}
?>