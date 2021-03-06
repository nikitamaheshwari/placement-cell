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
if (isset($_REQUEST['id']))
{
   if(!empty($_REQUEST['id']) )
   {
	   $student_id = $_REQUEST['id'];
   } else {
	   header("Location:student_profile.php");	
   }
} else {
	header("Location:student_profile.php");	
}
if (isset($_REQUEST['status']))
{
   if(!empty($_REQUEST['status']) )
   {
	   $error = "Can not update data.";
   } else {
   	   $error = NULL;
   }
} else {
	$error = '';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Career Point University</title>

<!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" >

</head>

<body>
  <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="myhomepage.php">Placement Cell | CP University</a>
            </div>
<!-- Brand and toggle get grouped for better mobile display -->
                       <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="myhomepage.php">My Home</a>
                    </li>
                    <li>
                        <a href="student_profile.php">My Profile</a>
                    </li>
                    <li>
                        <a href="changepassword.php">ChangePassword</a>
                    </li>

                    <li>
                        <a href="companylist.php">Companies</a>
                    </li>
                    <li>
                        <a href="../Logout.php">Logout</a>
                    </li>
              </ul>
          </div>
            <!-- /.navbar-collapse -->
  </div>
        <!-- /.container -->
</nav>

<?php

 $query="select * from student_table where college_id=$id";
		$result=FetchData($query);
        $rw=mysql_fetch_array($result);

$college_id=$rw["college_id"];
$name = $rw["name"];
$father_name = $rw["father_name"];
$mother_name = $rw["mother_name"];
$DOB = $rw["DOB"];
$branch = $rw["branch"];
$course = $rw["course"];
$cgpa = $rw["cgpa"];
$percentage_10 = $rw["percentage_10"];
$percentage_12 = $rw["percentage_12"];
$mobile = $rw["mobile"];
$address = $rw["address"];
$email = $rw["email"];
$year = $rw["year"];
?>
<div class="container">
<div class="row"><h1 class="page-header">My Profile</h1></div>
<div class="row">
<form method="post" action="EditProfile1.php" name="updateprof">
<table align="center"  class="table table-bordered"  data-height="399">
    <thead class="text-center" >
    	<tr>
        	<th width="20%" data-field="college_id" class="text-center">College Id : </th>
          <th width="100%"  data-filed="college_id" class="text-center"><?php echo $college_id;?></th>
        </tr> 
        <tr>
        	<th data-field="name" class="text-center">Name : </th>
            <th data-filed="name" class="text-center"><?php echo $name; ?> </th>
        </tr> 
        <tr>
        	<th data-field="email" class="text-center">Email: </th>
            <th data-filed="email" class="text-center"><input value="<?php echo $email;?>" type="text" name="email" id="email" style="width:300px"/> </th>
        </tr>     
        <tr>
        	<th data-field="father_name "class="text-center">Father's Name : </th>
            <th data-filed="father_name" class="text-center"><input value="<?php echo $father_name;?>" type="text" name="father_name"  id="father_name" style="width:300px"/> </th>
        </tr> 
        <tr>
        	<th data-field="mother_name" class="text-center">Mother's Name : </th>
            <th data-filed="mother_name" class="text-center"><input value="<?php echo $mother_name;?>" type="text" name="mother_name"  id="mother_name" style="width:300px"/> </th>
        </tr>
            
         <tr>
        	<th data-field="DOB" class="text-center">Date of Birth : </th>
            <th data-filed="DOB" class="text-center"><input value="<?php echo $DOB;?>" type="text" name="DOB"  id="DOB" style="width:300px"/> </th>
        </tr>
         <tr>
        	<th data-field="couse" class="text-center">Course: </th>
            <th data-filed="course" class="text-center"><input value="<?php echo $course; ?>" type="text" name="course"  id="course" style="width:300px"/> </th>
        </tr> 
         <tr>
        	<th data-field="branch" class="text-center">Branch: </th>
            <th data-filed="branch" class="text-center"><input value="<?php echo $branch;?>" type="text" name="branch" id="branch" style="width:300px"/> </th>
        </tr> 
         <tr>
        	<th data-field="year" class="text-center">Year: </th>
            <th data-filed="year" class="text-center"><input value="<?php echo $year;?>" type="text" name="year" id="year" style="width:300px"/> </th>
        </tr>  
         <tr>
        	<th data-field="cgpa" class="text-center">CGPA: </th>
            <th data-filed="cgpa" class="text-center"><?php echo $cgpa;?></th>
        </tr>  
         <tr>
        	<th data-field="percentage_10" class="text-center">10th Percentage: </th>
            <th data-filed="percentage_10" class="text-center"><?php echo $percentage_10;?></th>
        </tr>  
        <tr>
        	<th data-field="percentage_12" class="text-center">12th Percentage: </th>
            <th data-filed="percentage_12" class="text-center"><?php echo $percentage_12;?></th>
        </tr>  
        <tr>
        	<th data-field="mobile" class="text-center">Mobile No: </th>
            <th data-filed="mobile" class="text-center"><input value="<?php echo $mobile;?>" type="text" name="mobile"  id="mobile" style="width:300px"/> </th>
        </tr> 
          <tr>
        	<th data-field="address" class="text-center">Address: </th>
            <th data-filed="address" class="text-center"><input value="<?php echo $address;?>" type="text" name="address"  id="address" style="width:300px"/> </th>
        </tr> 
          
    </thead>
</table>
 <button type="submit" class="btn btn-default" value="Update">Update</button>
</form>
</div></div>
 	  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <!-- Footer -->
        <footer>
            <div class="row">
<div class="col-lg-12">
                    <p><center>Copyright &copy; Placement Cell 2016</center>
                    </p>
                </div>
            </div>
        </footer>

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>