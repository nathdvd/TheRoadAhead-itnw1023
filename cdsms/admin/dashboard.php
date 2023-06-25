<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cdsmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS Admin Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Welcome Back to !!</span> Car Driving School Management System
              
                </div>
            </div>

                <a href="registered-users.php">
         <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
             
                        </div>
                        <?php $query=mysqli_query($con,"Select * from  tblregusers");
$usercounts=mysqli_num_rows($query);
?>
                        <h2 class="mb-0">
                            <span class="count"><?php echo $usercounts;?></span>
                        </h2>
                        <p class="text-light">Total Number of Users</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div></a>
            <!--/.col-->
                <a  href="subscribed-users.php">
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
           
                        </div>
                        <?php $query1=mysqli_query($con,"Select * from  tblsubscribers");
$usersubs=mysqli_num_rows($query1);
?>
                        <h2 class="mb-0">
                            <span class="count"><?php echo $usersubs;?></span>
                        </h2>
                        <p class="text-light">Total Subscribed User</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div></a>
            <!--/.col-->
 <a href="old-user-enquiry.php">
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
            
                        </div>
                        <?php $query2=mysqli_query($con,"Select * from  tblenquiry");
$numenquiry=mysqli_num_rows($query2);
?>
                        <h2 class="mb-0">
                            <span class="count"><?php echo $numenquiry;?></span>
                        </h2>
                        <p class="text-light">Total Number of Enquiry</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div></a>
            <!--/.col-->
 <a  href="new-application.php">
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div>
                        <?php $query=mysqli_query($con,"Select * from  tblapplication where Status is null");
$newapp=mysqli_num_rows($query);
?>
                        <h2 class="mb-0">
                            <span class="count"><?php echo $newapp;?></span>
                        </h2>
                        <p class="text-light">Total Number of New Applications</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div></a>

                <a  href="approved-application.php">
           <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div>
                        <?php $query1=mysqli_query($con,"Select * from  tblapplication where (Status='Approved' || Status='Completed' || Status='Partial Payment')");
$appapli=mysqli_num_rows($query1);
?>
                        <h2 class="mb-0">
                            <span class="count"><?php echo $appapli;?></span>
                        </h2>
                        <p class="text-light">Total Approved Application</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div></a>
       <a href="cancelled-application.php">         
<div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div>
                        <?php $query2=mysqli_query($con,"Select * from  tblapplication where Status='Cancelled'");
$canapp=mysqli_num_rows($query2);
?>
                        <h2 class="mb-0">
                            <span class="count"><?php echo $canapp;?></span>
                        </h2>
                        <p class="text-light">Total Number of Cancelled Application</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div></a>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
