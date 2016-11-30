<?php 
include_once("../library/mylibrary.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$check_if_correct = AdminLogin($username,$password);
if($check_if_correct){
	session_start();
	if(!isset($_SESSION["role"]))
	{
		$_SESSION["username"]=$username;
		$_SESSION["role"] = "Admin";
	}
	header("Location:adminhomepage.php");
	die();
} else {
	header("Location:../admin_login.php?status=failed");
	die();
}
?>