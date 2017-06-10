<?php
session_start();
echo $_COOKIE['x']."<br>";
echo session_id()."<br>";
echo $_SESSION['c'];
?>