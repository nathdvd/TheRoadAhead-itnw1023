<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tblregusers where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['cdsmsuid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
  
    echo "<script>alert('Invalid Details.');</script>";
    }
  }
  ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS User Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../admin/assets//css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color: white">CDSMS Signin</h3>
                </div>
                <div class="login-form">
                    <form action="" method="post" name="login">
                        
                        <div class="form-group">
                            <label>Registered Email or Contact Number</label>
                            <input type="text" name="emailcont" required="true" placeholder="Registered Email or Contact Number" required="true" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter password" required="true" class="form-control">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-right">
                                <a href="forgot-password.php">Forgotten Password?</a>
                            </label>
<div class="checkbox">
                                    <label class="pull-left">
                                <a href="../index.php">Home!!</a>
                            </label>

                                </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Sign in</button>
                          <div class="checkbox">
                                    <label class="pull-center">
                                <a href="signup.php">Signup(Create an account)</a>
                            </label>

                                </div>      
                            
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../admin/assets//js/main.js"></script>


</body>

</html>
