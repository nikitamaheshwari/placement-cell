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
if (isset($_REQUEST['id']))
{
   if(!empty($_REQUEST['id']) )
   {
	   $company_id = $_REQUEST['id'];
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
    <?php 
    		$query = "select * from company_registration where id=$company_id";
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
          	<h1 class="page-header">Companies List</h1>
          </div>
          <?php
			$data = mysql_fetch_array($result, MYSQL_NUM);
			?>
          <table class="table table-bordered table-hover">
          	<tr>
               	<td>ID</td>
                    <td><?php echo $data[0]?></td>
               </tr>
               <tr>
               	<td>Name</td>
                    <td><?php echo $data[1]?></td>
               </tr>
               <tr>
               	<td>Url</td>
                    <td><?php echo $data[2]?></td>
               </tr>
               <tr>
               	<td>Type</td>
                    <td><?php echo $data[3]?></td>
               </tr>
               <tr>
               	<td>Eligibility</td>
                    <td><?php echo $data[4]?></td>
               </tr>
               <tr>
               	<td>Minimum CGPA</td>
                    <td><?php echo $data[5]?></td>
               </tr>
               <tr>
               	<td>Minimum 10th Percentage</td>
                    <td><?php echo $data[6]?></td>
               </tr>
               <tr>
               	<td>Minimum 12th Percentage</td>
                    <td><?php echo $data[7]?></td>
               </tr>
               <tr>
               	<td>Email</td>
                    <td><?php echo $data[8]?></td>
               </tr>
               <tr>
               	<td>Info</td>
                    <td><?php echo $data[9]?></td>
               </tr>
               <tr>
               	<td>
                    	<?php if($data[10]==0){?>
                         	<a href="approveCompany.php?id=<?php echo $company_id?>&data=1"><button>Approve</button></a>
                         <?php } else {?>
                         <a href="approveCompany.php?id=<?php echo $company_id?>&data=0"><button>DisApprove</button></a>
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
                    <p><center>Copyright &copy; Your Website 2014</center></p>
                </div>
            </div>
        </footer>

     

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>