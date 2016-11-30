<?php 
include_once("../library/mylibrary.php");
session_start();
if(!isset($_SESSION["role"])) {
	header("Location:../authError.php");	
	die();
}else {
	if($_SESSION["role"]=="Admin"){
		$id = $_SESSION["username"];
		$role = $_SESSION["role"];
	} else {
		header("Location:../authError.php");	
		die();	
	}
}
$password = $_REQUEST["password"];
$confirm_password = $_REQUEST["confirm_password"];
if($password!=$confirm_password){
	header("Location:changepassword.php");
	die();
}
$check_if_done = changeAdminPassword($id,$password);
if($check_if_done){
	header("Location:adminhomepage.php");
	die();
} else {
	header("Location:changepassword.php");
	die();
}
?>