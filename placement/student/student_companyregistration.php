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
if (isset($_REQUEST['student_id'])&isset($_REQUEST['active'])&isset($_REQUEST['company_id']))
{	
   if(!empty($_REQUEST['student_id']) )
   {
       $company_id = $_REQUEST['company_id'];
	   $student_id = $_REQUEST['student_id'];
	   $active = $_REQUEST['active'];
	   $time = date("m/d/Y h:i:s a", time());
	   if($active==1){
		 //$id = GenerateId('student_company',0);
	   	$query = "insert into student_company values(DEFAULT,$student_id,$company_id,'$time',$active)";
		
	   } else {
	   	$query = "update student_company set active=$active where student_id=$student_id and company_id=$company_id";
	   }
	   $result = mysql_query($query,$cn);
       echo mysql_error();
       if($result==1){
	   	header("Location:companylist.php");	
	   } else {
	   	header("Location:companylist.php");
	   }
   } else {
	   header("Location:companylist.php");	
   }
} else {
	header("Location:adminhomepage.php");	
}

?>
