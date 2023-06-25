<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cdsmsuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $uid=$_SESSION['cdsmsuid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];

     $query=mysqli_query($con, "update tblregusers set FirstName='$fname', LastName='$lname' where ID='$uid'");
    if ($query) {
    
    echo '<script>alert("Profile has been updated.")</script>';
    echo "<script>window.location.href='profile.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
  }
  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS User Profile</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../admin/assets/css/style.css">

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
                        <h1>User Profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="profile.php">User Profile</a></li>
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
                            <div class="card-header"><strong>User</strong><small> Profile</small></div>
                            <form name="profile" method="post" action="">
                                
                            <div class="card-body card-block">
 <?php
$uid=$_SESSION['cdsmsuid'];
$ret=mysqli_query($con,"select * from tblregusers where ID='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-group"><label for="company" class=" form-control-label">First Name</label><input type="text" name="fname" value="<?php  echo $row['FirstName'];?>" class="form-control" required='true'></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Last Name</label><input type="text" name="lname" value="<?php  echo $row['LastName'];?>" class="form-control" required='true'></div>
                                        <div class="form-group"><label for="street" class=" form-control-label">Contact Number</label><input type="text" name="mobilenumber" value="<?php  echo $row['MobileNumber'];?>"  class="form-control" maxlength='10' readonly='true'></div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Email</label><input type="email" name="email" value="<?php  echo $row['Email'];?>" class="form-control" readonly='true'></div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Registration Date</label><input type="text" name="" value="<?php  echo $row['RegDate'];?>" readonly="" class="form-control"></div>
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


                            <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
                            <script src="../admin/vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="../admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="../admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="../admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="../admin/assets/js/main.js"></script>
</body>
</html>
<?php }  ?>