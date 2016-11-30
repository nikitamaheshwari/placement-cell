<?php 
include_once("library/mylibrary.php");
$id = GenerateId("company_registration",2);
$company_name = $_REQUEST["company_name"];
echo $company_name;
$url = $_REQUEST["url"];
echo $url;
$companytype = $_REQUEST["companytype"];
echo $companytype;
$min_cgpa = $_REQUEST["min_cgpa"];
echo $min_cgpa;
$min_10_per = $_REQUEST["min_10_per"];
echo $min_10_per;

$min_12_per = $_REQUEST["min_12_per"];
echo $min_12_per;

$eligible = $_REQUEST["eligible"];
echo $eligible;
$class = $_REQUEST["class"];
echo $class;
$email = $_REQUEST["email"];
echo $email;
$info = $_REQUEST["info"];
echo $info;

$query = "insert into company_registration values('$company_name','$url','$companytype','$eligible','$min_cgpa','$min_10_per','$min_12_per','$class','$email','$info',1)";
$result = FetchData($query);

if($result==1){
	echo "Data Saved Successfully";
} else {
	echo "Error";
}

?>