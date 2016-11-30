<?php 
require_once "../library/mylibrary.php";
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
	
$father_name = $_POST["father_name"];
$mother_name = $_POST["mother_name"];
$DOB = $_POST["DOB"];
$branch = $_POST["branch"];
$course = $_POST["course"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$email = $_POST["email"];
$year = $_POST["year"];


$query = "update student_table set father_name='$father_name',mother_name='$mother_name',DOB='$DOB', branch='$branch',
course='$course',mobile='$mobile',address='$address',
email='$email',year='$year' where college_id=$id";
mysql_query($query,$cn);
$n=mysql_affected_rows();
if($n<1)
{
	header("Location:EditProfile.php?status=Error");
	die();
}
header("Location:student_profile.php");

?>