<?php 
include_once("library/mylibrary.php");

$id = GenerateId('student_table',1);
$fname = $_REQUEST["fname"];
$college_id = $_REQUEST["college_id"];
$sname = $_REQUEST["sname"];
$mname = $_REQUEST["mname"];
$gender = $_REQUEST["gender"];
$date = $_REQUEST["date"];
$branch = $_REQUEST["branch"];
$course = $_REQUEST["course"];
$cgpa = $_REQUEST["cgpa"];
$per_10 = $_REQUEST["per_10"];
$per_12 = $_REQUEST["per_12"];
$mob = $_REQUEST["mobno"];
$address = $_REQUEST["address"];
$email = $_REQUEST["email"];
$year = $_REQUEST["year"];
$pass = generatePassword(8);
$password = encrypt_decrypt('encrypt',$pass);

$query = "insert into student_table values($id,'$college_id','$sname','$fname', '$mname','$gender','$date','$course','$branch','$year','$cgpa','$per_10','$per_12','$mob','$email','$address',null,null,1)";


$result = FetchData($query);
echo mysql_error();

if($result==1){

	$result = FetchData("insert into login values ('$college_id','$password')");
	if($result==1){	
		echo "Data Saved Successfully";
		echo "Password is ".$pass;
	}else
		echo "Failed to add user";
} else {
	echo "Error";
}
?>