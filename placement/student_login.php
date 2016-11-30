<?php
require_once "library/mylibrary.php";
session_start();
if(!isset($_SESSION["role"])) {
	
}else {
	if($_SESSION["role"]=="Student"){
		header("Location:student/myhomepage.php");	
	} else {
		header("Location:admin/adminhomepage.php");
	}
}
if (isset($_REQUEST['status']))
{
   if(!empty($_REQUEST['status']) )
   {
	   $error = "Username or Password is incorrect.";
   } else {
   	   $error = "";
   }
} else {
	$error = "";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Placement Cell | CP University</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">About</a>
                    </li>
                    <!--<li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="registration.html">Register</a>
                            </li>
                            <li>
                                <a href="student_login">Login</a>
                            </li>
                                                       
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="company_registration.html">Register</a>
                            </li>
                           
                        </ul>
                    </li>
                   <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="admin/admin_login.html">Admin</a>
                            </li>
                                                    </ul>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
        	
            <div class="col-md-2">
            </div>
            <div class="col-lg-8">
                <h1 class="page-header">
                  Student Login Form
                </h1>
                <form role="form" action="checkstudentlogin.php" method="post">
                	
                    <div class="form-group">
                    	<label for="college_id">College Id:</label>
                   		 <input type="text" class="form-control" id="college_id" name="college_id">
                    	</div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                  </div>
                  <?php 
			   if($error!=""){?>
                  <div class="alert alert-dismissable alert-danger">
                       <a href="#" class="close" data-dismiss="alert">&times;</a>
                       <strong>ERROR </strong> <?php echo $error;?>
                  </div>
                  <?php }
			   ?>
                  <button type="submit" class="btn btn-default">Submit</button>
                  
                </form>
                <a href="forgot_password.php" style="display:block; padding:5px 0 0 0;">Forgot Password</a>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p><center>Copyright &copy; Your Website 2014</center></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
