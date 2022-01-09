<?php
require_once 'connection.php';
if(!isset($_SESSION["auth_user"])){
	header("location:login.php");
	die;
}

?>