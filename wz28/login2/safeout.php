<?php
session_start();
session_destroy();
setcookie("username","",time()-1000);
setcookie("pwd","",time()-1000);
setcookie("index","",time()-1000);
header("location:login.php");
?>