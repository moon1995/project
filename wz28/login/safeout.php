<?php
session_start();
session_destroy();
//销毁cookie
setcookie("userName","",time()-1000);
setcookie("pwd","",time()-1000);
header("location:login.php");
?>