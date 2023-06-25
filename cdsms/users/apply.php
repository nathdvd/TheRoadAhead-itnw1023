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
    $packages=$_POST['packages'];
    $trainingdate=$_POST['trainingdate'];
    $time=$_POST['time'];
    $takenfor=$_POST['takenfor'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $licno=$_POST['licno'];
    $address=$_POST['address'];
    $altnumber=$_POST['altnumber'];
    $regnumber = mt_rand(100000000, 999999999);
   $licnence=$_FILES["licpic"]["name"];
   $extension = substr($licnence,strlen($licnence)-4,strlen($licnence));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
    $licnencenew=md5($licnence).$extension;
     move_uploaded_file($_FILES["licpic"]["tmp_name"],"licimagesimages/".$licnencenew);
    $query=mysqli_query($con,"insert into tblapplication(PackID,UserId,RegNumber,FullName,Email,MobileNumber,Gender,Age,LicenceNumber,Address,AlternateNumber,TrainingDate,TrainingTiming,UploadLicence,TakenFor) value('$packages','$uid','$regnumber','$fullname','$email','$mobilenumber','$gender','$age','$licno','$address','$altnumber','$trainingdate','$time','$licnencenew','$takenfor')");
if ($query) {
   echo "<script>alert('Application has been submitted');</script>";
     echo "<script>window.location.href='apply.php'</script>";
}
  else
    {
   
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

  
}
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS Application Form</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
   

    <link rel="stylesheet" href="../admin/vendors//bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/vendors//font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/vendors//themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors//flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/vendors//selectFX/css/cs-skin-elastic.css">



<link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">

    <link rel="stylesheet" href="../admin/assets//css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->


    <div id="right-panel" class="right-panel">

        <!-- Header-->
       

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Application Form</h1>
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
                            <div class="card-header"><strong>Application</strong><small> Form</small></div>
                            <form name="package" method="post" enctype="multipart/form-data">
                               
                            <div class="card-body card-block">

  <div class="col-lg-6">
<div class="form-group">
    <label for="city" class=" form-control-label">Taken For</label>
<select type="text" name="takenfor" id="takenfor" required="true" class="form-control">
<option value="">Select</option>
<option value="Family Member">Family Member</option>
<option value="Myself">Myself</option>
</select>
</div>
<div class="form-group" id="contactdetail">
<p style="padding-top: 30px; font-size: 15px"><strong>Family Member Details</strong></p>
                                              

        <div class="form-group">
            <label for="city" class=" form-control-label">Family member Name</label>
            <input type="text" name="fullname" placeholder="Family member Name" id="fullname" class="form-control">
        </div>  
   
   <div class="form-group">
    <label for="city" class=" form-control-label">Family member Email</label>
    <input type="text" class="form-control" name="email" placeholder="Family member Email" id="email" >
</div>

<div class="form-group">
    <label for="city" class=" form-control-label">Family member Mobile Number</label>
    <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Family member Phone" maxlength="10" pattern="[0-9]{10}" class="form-control">
</div>
</div>  
                                            
<div class="row form-group">
<div class="col-12">
<div class="form-group">
    <label for="city" class=" form-control-label">Gender</label>
    <select type="text" name="gender" placeholder="Your Name" required="true" class="form-control">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Transgender">Transgender</option>
                                                    </select>
                                                </div>
                                                   

 <div class="form-group">
    <label for="city" class=" form-control-label">Age</label>
    <input type="text" name="age" placeholder="Age" required="true" maxlength="2" class="form-control">
</div>
                                                    
<div class="form-group">
    <label for="city" class=" form-control-label">Licence Number</label>
    <input type="text" name="licno" placeholder="Licence Number" required="true" maxlength="15" class="form-control">
</div>
                                                    
            <div class="form-group"><label for="city" class=" form-control-label">Upload Licence</label><input type="file" name="licpic" required="true" class="form-control"></div>
                                                    <div class="form-group"><label for="city" class=" form-control-label">Your Address</label><textarea name="address" id="address" placeholder="Your Address" required="true" class="form-control"></textarea></div>
                                                    <div class="form-group"><label for="city" class=" form-control-label">Alternate Number</label><input type="text" name="altnumber" placeholder="Alternate Number" required="true" maxlength="10" class="form-control"></div>
                                                    </div>
                                                    <div>
                                                    </div>
                                                   
                                                        
                                                    </div>
                                                    </div>

 

           <div align="center">                                         
    <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Apply Now
                                                        </button>
</div>


                                                    </div>
                                                    
                                                     
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
                            <script src="../admin/vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="../admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="../admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="../admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="../admin/assets/js/main.js"></script>
</body>
</html>
<script type="text/javascript">

  //For report file
  $('#contactdetail').hide();
  $(document).ready(function(){
  $('#takenfor').change(function(){
  if($('#takenfor').val()=='Myself')
  {
  $('#contactdetail').hide();
  } else if($('#takenfor').val()==''){
      $('#contactdetail').hide();
  jQuery("#fullname").prop('required',false);  
  jQuery("#email").prop('required',false);
  jQuery("#mobilenumber").prop('required',false);
  } else{
    $('#contactdetail').show();
  jQuery("#fullname").prop('required',true);  
  jQuery("#email").prop('required',true);
  jQuery("#mobilenumber").prop('required',true);
  }
})}) 
</script>
<?php }  ?>