<?php 
include_once("../library/mylibrary.php");
session_start();
if(!isset($_SESSION["role"])) {
	header("Location:../authError.php");	
	die();
}else {
	if($_SESSION["role"]=="Student"){
		$id = $_SESSION["college_id"];
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
$check_if_done = changeStudentPassword($id,$password);
if($check_if_done){
	header("Location:myhomepage.php");
	die();
} else {
	header("Location:changepassword.php");
	die();
}
?>