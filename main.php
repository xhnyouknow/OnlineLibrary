<?php
//由此进入图书管理系统。。。
session_start();
session_unset();
session_destroy();
include_once("loading.php");
$smarty->display("main.html");
?>