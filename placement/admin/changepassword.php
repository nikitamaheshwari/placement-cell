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
                        <a href="companyinfo.php">Companies</a>
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

     
      <
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
        	
            <div class="col-md-2">
            </div>
            <div class="col-lg-8">
                <h1 class="page-header">
                 Password Change
                </h1>
                <form role="form" action="ChangePassword1.php" method="post">
                	
                    <div class="form-group">
                    	<label for="password">Password</label>
                   		 <input type="password" class="form-control" id="password" name="password">
                    	</div>
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                  </div>
                  <button type="submit" class="btn btn-default">Change Password</button>
            	</form>
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
        
        </div>
    
  <!-- /.container -->
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