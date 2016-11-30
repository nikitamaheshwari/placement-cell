<?php 
require_once "../library/mylibrary.php";
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
if (isset($_REQUEST['id'])&isset($_REQUEST['data']))
{	
   if(!empty($_REQUEST['id']) )
   {
	   $student_id = $_REQUEST['id'];
	   $data = $_REQUEST['data'];
	   $query = "update student_table set approved=$data where college_id=$student_id";
	   
	   $result = mysql_query($query,$cn);
	   if($result==1){
	   	header("Location:studentinfo.php?student_id=$student_id&status=success");	
	   } else {
	   	header("Location:studentinfo.php?student_id=$student_id&status=failure");
	   }
   } else {
	   header("Location:studentinfo.php?student_id=$student_id&status=failure");	
   }
} else {
	header("Location:adminhomepage.php");	
}
?>
