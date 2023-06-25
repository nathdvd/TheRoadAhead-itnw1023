<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tblregusers where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo '<script>alert("This email or Contact Number already associated with another account")</script>';
    }
    else{
    $query=mysqli_query($con, "insert into tblregusers(FirstName, LastName, MobileNumber, Email, Password) value('$fname', '$lname','$contno', '$email', '$password' )");
    if ($query) {
    
    echo '<script>alert("You have successfully registered")</script>';
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
}
  ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS User Signup</title>
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


<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 
</script>
</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3 style="color: white">CDSMS Create an account</h3>
                </div>
                <div class="login-form">
                    <form action="" method="post" name="login">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" placeholder="Your First Name..." required="true" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" placeholder="Your Last Name..." required="true" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile Number" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" placeholder="Email address" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter password" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" name="repeatpassword" placeholder="Enter repeat password" required="true" class="form-control">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-right">
                                <a href="index.php">Signin</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">REGISTER</button>
                                
                            
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
