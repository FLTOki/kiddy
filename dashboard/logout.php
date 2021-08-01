<?php
if(!isset($_SESSION)){session_start();}
session_unset();
session_destroy();
if(!isset($_SESSION)){session_start();}
$_SESSION["msg"] = 'You are now logged out';
header('location:login.php');

?>
