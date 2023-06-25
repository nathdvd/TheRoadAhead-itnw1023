<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cdsmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
$eid=$_GET['editid'];
$cmsaid=$_SESSION['cdsmsaid'];
 $packname=$_POST['packname'];
$packdes=$_POST['packdes'];
$packduration=$_POST['packduration'];
$packprice=$_POST['packprice'];
 $query=mysqli_query($con,"update tblpackages set PackageName='$packname',PackageDec='$packdes',PackageDuration='$packduration',PackagePrice='$packprice' where  ID='$eid'");

    if ($query) {
   
    echo "<script>alert('Package Detail has been update.');</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

  
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS Packages</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Training Packages</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="manage-package.php">Traning Packages</a></li>
                            <li class="active">Update</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Training</strong><small> Packages</small></div>
                            <form name="package" method="post" action="">
                                
                            <div class="card-body card-block">
 <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblpackages where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-group"><label for="company" class=" form-control-label">Package Name</label><input type="text" name="packname" value="<?php  echo $row['PackageName'];?>" class="form-control" id="packname" required="true"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Package Description</label><textarea type="text" name="packdes" id="packdes" class="form-control" required="true"><?php  echo $row['PackageDec'];?></textarea></div>
                                        <div class="form-group"><label for="street" class=" form-control-label">Package Duration</label><input type="text" name="packduration" value="<?php  echo $row['PackageDuration'];?>" id="packduration" class="form-control" required="true"></div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Package Price</label><input type="text" name="packprice" id="packprice" value="<?php  echo $row['PackagePrice'];?>" class="form-control" required="true"></div>
                                                    </div>
                                                    
                                                    </div>
                                                    
                                                    </div>
                                                    <?php } ?>
                                                     <div class="card-footer">
                                                       <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i> Update
                                                        </button></p>
                                                        
                                                    </div>
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>