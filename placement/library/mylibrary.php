<?php
$cn=mysql_connect("localhost","root","");
if(! $cn)
{
	echo "Unable to connect";
	die();
}
$db=mysql_select_db("student",$cn);
if(! $db)
{
	echo "Dadabase does not exist";
	die();
} 
function FetchData($query) //user defined
{
	global $cn;
	$result=mysql_query($query,$cn);
	
	return $result;
}
function GenerateId($tablename,$start) //user defined
{
	$query="select * from $tablename";
	$result=FetchData($query);
	$n=mysql_num_rows($result);
	return $n+$start;
}
function generatePassword($length){
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     return substr(str_shuffle($chars),0,$length);
}
function encrypt_decrypt($action, $string) {
   $output = false;

   $key = '1236548790';

   // initialization vector 
   $iv = md5(md5($key));

   if( $action == 'encrypt' ) {
       $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
       $output = base64_encode($output);
   }
   else if( $action == 'decrypt' ){
       $output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
       $output = rtrim($output, "");
   }
   return $output;
}
function CheckLogin($college_id,$pwd)
{
	$query = "select password from login where college_id='".$college_id."' and password='".$pwd."'";
	echo "test".$college_id.$pwd;
	$result = FetchData($query);
	$password = mysql_fetch_row($result);
	$password = $password[0]; 
	$password_user = encrypt_decrypt('decrypt',$password);
	if(strcasecmp($pwd,$password_user)){
		return true;	
	} else {
		return false;
	}
}
function AdminLogin($username,$pwd)
{
	$query = "select password from admin_login where username='$username' and password='$pwd'";
	$result = FetchData($query);
	echo $result;
	$password = mysql_fetch_row($result);
	echo $password;
	$password = $password[0]; 
	if(strcasecmp($pwd,$password_user)){
		return true;	
	} else {
		return false;
	}
}

function changeAdminPassword($id,$password){
	$query = "update admin_login set password='$password' where username='$id'";
	$result = mysql_query($query);
	if($result==1){
		return true;	
	} else {
		return false;
	}
}
function changeStudentPassword($id,$password){
	$password = encrypt_decrypt('encrypt',$password);
	$query = "update login set password='$password' where college_id='$id'";
	$result = mysql_query($query);
	if($result==1){
		return true;	
	} else {
		return false;
	}
}
?>