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
    		$query = "select id,name,url,type,info,eligibility,min_cgpa,min_10_percentage,min_12_percentage from company_registration where id not in (select company_id from student_company where student_id=$id) ";//and approved=1
		$result = FetchData($query);
		echo mysql_error();

		$query1 = "select cgpa,percentage_10, percentage_12,course from student_table where college_id=$id";
		$result1 = FetchData($query1);
		echo mysql_error();

		$rw = mysql_fetch_array($result1);
		$cgpa = (int) $rw[0];
		$min_10 = (int) $rw[1];
		$min_12 = (int) $rw[2];
		$course = $rw[3];
		
		$query2 = "select id,name,url,type,info,eligibility,min_cgpa,min_10_percentage,min_12_percentage from company_registration where id in (select company_id from student_company where student_id=$id and active=1) ";//and approved=1
		$result2 = FetchData($query2);
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
                    <td>Action</td>
               </tr>
               <?php
			while($data = mysql_fetch_array($result)){
				$cpi = (int)$data[6];
				$min_10_t = (int)$data[7];
				$min_12_t = (int)$data[8];
				
				if(strcmp($data[5],"For All")!=0 || $data[5]==$course){
				if($cpi>=$cgpa&&$min_10>=$min_10_t&&$min_12>=$min_12_t){
				?>
				<tr>
                    <td><?php echo $data[0]?></td>
                    <td><a href="companyinfo.php?id=<?php echo $data[0];?>"><?php echo $data[1]?></a></td>
                    <td><?php echo $data[2]?></td>
                    <td><?php echo $data[3]?></td>
                    <td><?php echo $data[4]?></td>
                    <td><a href="student_companyregistration.php?student_id=<?php echo $id?>&company_id=<?php echo $data[0];?>&active=1"><button>Register</button></a></td>
                    </tr>
                    
				<?php } }
			}
			while($data = mysql_fetch_array($result2)){
				?>
				<tr>
                    <td><?php echo $data[0]?></td>
                    <td><a href="companyinfo.php?id=<?php echo $data[0];?>"><?php echo $data[1]?></a></td>
                    <td><?php echo $data[2]?></td>
                    <td><?php echo $data[3]?></td>
                    <td><?php echo $data[4]?></td>
                    <td><a href="student_companyregistration.php?student_id=<?php echo $id?>&company_id=<?php echo $data[0];?>&active=0"><button>Un-Register</button></a></td>
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