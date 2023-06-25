<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cdsmsuid']==0)) {
  header('location:logout.php');
  } else{
  

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS View Application Details</title>
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
                        <h1>View Application Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="application-details.php">View Application Details</a></li>
                            <li class="active">Application</li>
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
                            <div class="card-header"><strong>View</strong><small> Application</small></div>





                                <p style="font-size:16px; color:red" align="center"> </p>
                            <div class="card-body card-block">
 <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select tblregusers.ID,tblregusers.FirstName,tblregusers.LastName,tblregusers.MobileNumber as umobno,tblregusers.Email as uemail,tblpackages.PackageName,tblpackages.PackageDec,tblpackages.PackageDuration,tblpackages.PackagePrice,tblpackages.PackageDate,tblapplication.ID as aapid, tblapplication.PackID,tblapplication.Status,tblapplication.RegNumber,tblapplication.UserId,tblapplication.TakenFor,tblapplication.RegDate,tblapplication.FullName,tblapplication.Email,tblapplication.MobileNumber,tblapplication.Gender,tblapplication.Age,tblapplication.LicenceNumber,tblapplication.UploadLicence,tblapplication.Address,tblapplication.AlternateNumber,tblapplication.TrainingDate,tblapplication.TrainingTiming,tblapplication.RegDate from tblapplication join tblpackages on tblpackages.ID=tblapplication.PackID join tblregusers on tblregusers.ID=tblapplication.UserId where tblapplication.UserId='$uid' && tblapplication.ID='$cid' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>                       <table border="1" class="table table-bordered mg-b-0">
   
 <tr>
                                <th>Registration Number</th>
                                   <td colspan="4" style="font-size:20px;color: blue;text-align: center;"><?php  echo $row['RegNumber'];?></td></tr>
                                   <?php  if($row['TakenFor']=="Family Member"): ?>
                                    
                                    <tr><th>Family Member Full Name</th>
                                    <td colspan="4"><?php  echo $row['FullName'];?></td>
                                  </tr>


  
                                       <th>Family Member Email</th>
                                        <td><?php  echo $row['Email'];?></td>
                               <th>Family Member Mobile Number</th>
                                <td><?php  echo $row['MobileNumber'];?></td>
                            </tr>
                            <?php endif;
if($row['TakenFor']=="Myself"):

?><tr><th>Full Name</th>
                                    <td colspan="4"><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                                  </tr>


  
                                       <th>Email</th>
                                        <td><?php  echo $row['uemail'];?></td>
                               <th>Mobile Number</th>
                                <td><?php  echo $row['umobno'];?></td>
                            </tr>
                            <?php endif;
?>

 <tr>
                                <th>Package Name</th>
                                   <td><?php  echo $row['PackageName'];?></td>

                                <th>Package Duration</th>
                                   <td><?php  echo $row['PackageDuration'];?></td>
                                   </tr>

                                   <tr>
                                <th>Package Price</th>
                                   <td colspan="3"><?php  echo $packprice= $row['PackagePrice'];?></td>
                                   </tr>
                               
                               
                       <tr>
                       <th>Gender</th>
                         <td><?php  echo $row['Gender'];?></td>
                        <th>Age</th>
                         <td><?php  echo $row['Age'];?></td>
                     </tr>
                     <tr>
       <th>Licence Number</th>
       <td><?php  echo $row['LicenceNumber'];?></td>

   <th>Licence Image</th>  
   
   <td><img src="licimagesimages/<?php echo $row['UploadLicence'];?>" width="200" height="150"></td>
</tr>
<tr>
<th>Address</th>
<td><?php  echo $row['Address'];?></td>
<th>Alternate Number</th>
<td><?php  echo $row['AlternateNumber'];?></td>
</tr>
<tr>
<th>Training Start Date</th>
<td><?php  echo $row['TrainingDate'];?></td>
<th>Training Timing</th>
<td><?php  echo $row['TrainingTiming'];?></td>
</tr>


    <tr>
    <th>Status</th>
    <td colspan="3"> <?php  
if($row['Status']=="")
{
  echo "Pending";
}else {
echo $row['Status'];
}

     ;?></td>
  </tr>
</table>




<!--Payment History--->
<?php
$ret1=mysqli_query($con,"select * from tblpaymenthistory where ApplicationID='$cid'");
$num=mysqli_num_rows($ret1);?>

<table border="1" class="table table-bordered mg-b-0">
  <tr>
  <th colspan="5" style="text-align:center;color:blue; font-size:20px;">Payment History</th>
</tr>
<tr>
<th>#</th>
<th>Remarks</th>  
<th>Amount Deposit</th>  
<th>Status</th>  
<th>Payment Date</th>  
</tr>
<?php
if($num>0){
$cnt=1;
while($result=mysqli_fetch_array($ret1))
{
?> 
<tr>
  <td><?php echo $cnt;?></td>
<td><?php echo $result['Remark'];?></td> 
<td><?php echo $tamt=$result['PaymentAmount'];?></td> 
<td><?php echo $result['PaymentStatus'];?></td> 
<td><?php echo $result['PaymentDate'];?></td> 
</tr>



<?php 
$totalamt+=$tamt;
$cnt++;
} ?>
<tr>
<th colspan="2" style="text-align: center;">Total Amount Received</th>
<td><?php echo $totalamt;?></td>
<th>Total Pending Amount</th>
<td align="center" colspan="2"><?php echo ($packprice-$totalamt);?></td>
</tr>

<?php } else {?>
<tr>
 <td colspan="5" align="center">Payment history not available.</td> 
</tr>
<?php } }?>




</table> 
</div>                                             
</div>
 </div>
</div>
</div><!-- .animated -->
 </div><!-- .content -->
</div><!-- /#right-panel -->
<script src="../admin/vendors//jquery/dist/jquery.min.js"></script>
<script src="../admin/vendors//popper.js/dist/umd/popper.min.js"></script>
<script src="../admin/vendors//jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../admin/vendors//jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
<script src="../admin/vendors//bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../admin/assets//js/main.js"></script>
</body>
</html>
<?php }  ?>
