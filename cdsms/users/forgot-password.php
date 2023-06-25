<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tblregusers where  Email='$email' and MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     echo "<script type='text/javascript'> document.location ='resetpassword.php'; </script>";
    }
    else{
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS Forgot Password</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../admin/vendors//bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/vendors//font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/vendors//themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors//flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/vendors//selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../admin/assets//css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color: white">CDSMS Forgot Password</h3>
                </div>
                <div class="login-form">
                    <form action="" method="post" name="submit">
                        
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email" required="" name="email">
                        </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" name="contactno" required="">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-left">
                                <a href="index.php">signin</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Reset</button>
                                
                            
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../admin/vendors//jquery/dist/jquery.min.js"></script>
    <script src="../admin/vendors//popper.js/dist/umd/popper.min.js"></script>
    <script src="../admin/vendors//bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../admin/assets//js/main.js"></script>


</body>

</html>
