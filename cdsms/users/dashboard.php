<?php
session_start();
error_reporting(0);
include('../admin/includes/dbconnection.php');
if (strlen($_SESSION['cdsmsuid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS User Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../admin/vendors//bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/vendors//font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/vendors//themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors//flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/vendors//selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../admin/vendors//jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="../admin/assets//css/style.css">

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
                    <?php
$uid=$_SESSION['cdsmsuid'];
$ret=mysqli_query($con,"select FirstName,LastName from tblregusers where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FirstName'];
$name1=$row['LastName'];

?>
                    <h5><?php echo $name; ?>  <?php echo $name1; ?></h5><span class="badge badge-pill badge-success"> Welcome Back to !!</span> Car Driving School Management System
              
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../admin/vendors//jquery/dist/jquery.min.js"></script>
    <script src="../admin/vendors//popper.js/dist/umd/popper.min.js"></script>
    <script src="../admin/vendors//bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../admin/assets//js/main.js"></script>


    <script src="../admin/vendors//chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../admin/assets//js/dashboard.js"></script>
    <script src="../admin/assets//js/widgets.js"></script>
    <script src="../admin/vendors//jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../admin/vendors//jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../admin/vendors//jqvmap/dist/maps/jquery.vmap.world.js"></script>
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
