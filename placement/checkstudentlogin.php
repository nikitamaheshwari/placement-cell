<?php 
include_once("library/mylibrary.php");

$college_id = $_REQUEST["college_id"];
$pwd = $_REQUEST["pwd"];
if(empty($_REQUEST["pwd"])|is_null($_REQUEST["pwd"])|empty($_REQUEST["college_id"])|is_null($_REQUEST["college_id"])){
	header("Location:student_login.php?status=failed");
	die();
}
$check_if_correct = CheckLogin($college_id,$pwd);
if($check_if_correct){
	session_start();
	if(!isset($_SESSION["role"]))
	{
		$_SESSION["college_id"]=$college_id;
		
		$_SESSION["role"] = "Student";
	}
    header("Location:student/myhomepage.php");
	die();
} else {
	header("Location:student_login.php?status=failed");
	die();
}
?>
