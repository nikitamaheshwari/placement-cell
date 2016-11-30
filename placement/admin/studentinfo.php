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
if (isset($_REQUEST['student_id']))
{
   if(!empty($_REQUEST['student_id']) )
   {
	   $student_id = $_REQUEST['student_id'];
   } else {
	   header("Location:adminhomepage.php");	
   }
} else {
	header("Location:adminhomepage.php");	
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
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="adminhomepage.php">Placement Cell | CP University</a>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
                       <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="adminhomepage.php">Admin Home</a>
                    </li>
                    <li>
                        <a href="changepassword.php">Change Password</a>
                    </li>

                    <li>
                        <a href="studentlist.php">Student List</a>
                    </li>
                    <li>
                        <a href="../logout.php">Logout</a>
                    </li>
                   </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php 
    		$query = "select * from student_table where college_id=$student_id";
		$result = FetchData($query);
    ?>
	<div class="container">
         <div class="row">
    		<?php 
		if(is_null($error)){
			?><div class="alert alert-danger" role="alert"><?php echo $error;?></div><?php
		}
	?>
          <div class="col-md-12">
          	<h1 class="page-header">Student List</h1>
          </div>
          <?php
			$data = mysql_fetch_array($result, MYSQL_NUM);
			?>
               <img src="<?php $data[16]?>" alt="My Profile" class="img-circle">
          <table class="table table-bordered table-hover">
          	<tr>
               	<td>UID</td>
                    <td><?php echo $data[0]?></td>
               </tr>
               <tr>
               	<td>College ID</td>
                    <td><?php echo $data[1]?></td>
               </tr>
               <tr>
               	<td>Name</td>
                    <td><?php echo $data[2]?></td>
               </tr>
               <tr>
               	<td>Father Name</td>
                    <td><?php echo $data[3]?></td>
               </tr>
               <tr>
               	<td>Mother Name</td>
                    <td><?php echo $data[4]?></td>
               </tr>
               <tr>
               	<td>Gender</td>
                    <td><?php echo $data[5]?></td>
               </tr>
               <tr>
               	<td>Date Of Birth</td>
                    <td><?php echo $data[6]?></td>
               </tr>
               <tr>
               	<td>Course</td>
                    <td><?php echo $data[7]?></td>
               </tr>
               <tr>
               	<td>Branch</td>
                    <td><?php echo $data[8]?></td>
               </tr>
               <tr>
               	<td>Year</td>
                    <td><?php echo $data[9]?></td>
               </tr>
               <tr>
               	<td>CGPA</td>
                    <td><?php echo $data[10]?></td>
               </tr>
               <tr>
               	<td>10th Percentage</td>
                    <td><?php echo $data[11]?></td>
               </tr>
               <tr>
               	<td>12th Percentage</td>
                    <td><?php echo $data[12]?></td>
               </tr>
               <tr>
               	<td>Mobile</td>
                    <td><?php echo $data[13]?></td>
               </tr>
               <tr>
               	<td>Email</td>
                    <td><?php echo $data[14]?></td>
               </tr>
               <tr>
               	<td>Address</td>
                    <td><?php echo $data[15]?></td>
               </tr>
               <tr>
               	<td>Resume</td>
                    <td><a href=""><button>Resume Link</button></a></td>
               </tr>
               <tr>
               	<td>
                    	
                    	<?php if($data[18]==0){?>
                         	
                              <a href="approveStudent.php?id=<?php echo $student_id?>&data=1"><button>Approve</button></a>
                         <?php } else {?>
                         <a href="approveStudent.php?id=<?php echo $student_id?>&data=0"><button>DisApprove</button></a>
                         <?php }?>
                    </td>
               </tr>
               
          </table> 
    </div>
    </div>
  <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p><center>Copyright &copy; Placement Cell 2016</center></p>
                </div>
            </div>
        </footer>

     

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>