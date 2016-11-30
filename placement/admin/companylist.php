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
                        <a href="companylist.php">Companies List</a>
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
    		$query = "select id,name,url,type,info,email,approved from company_registration";
		$result = FetchData($query);
		
    ?>
	<div class="container">
    <div class="row">
    		<div class="col-md-12">
          	<h1 class="page-header">Company List</h1>
          </div>
          <table class="table table-bordered table-hover">
          	<tr>
               	<td>ID</td>
                    <td>Name</td>
               	<td>Url</td>
                    <td>Type</td>
                    <td>Info</td>
                    <td>Email</td>
                    <td>Approved/Not Approved</td>
               </tr>
               <?php
			while($data = mysql_fetch_array($result)){
			
				?>
				<tr>
                    <td><?php echo $data[0]?></td>
                    <td><a href="companyinfo.php?id=<?php echo $data[0];?>"><?php echo $data[1]?></a></td>
                    <td><?php echo $data[2]?></td>
                    <td><?php echo $data[3]?></td>
                    <td><?php echo $data[4]?></td>
                    <td><?php echo $data[5]?></td>
                    <td><?php if($data[6]==1){?><span class="label label-primary">Approved</span><?php } else {?><span class="label label-danger">Not Approved</span>
				<?php }?></td>
                    </tr>
				<?php
			}
			?>
          </table> 
    </div>
    </div>
  <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p><center>Copyright &copy; Your Website 2016</center></p>
                </div>
            </div>
        </footer>

     

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>