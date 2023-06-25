<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cdsmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit']))
  {
    
    $uid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
      $depositfee=$_POST['depositfee'];
 
    
     
   $query=mysqli_query($con,"insert into tblpaymenthistory(UserId,PaymentAmount,Remark,PaymentStatus) value('$uid','$depositfee','$remark','$status')");
   $query.=mysqli_query($con,"update tblapplication set Status='$status' where ID='$uid'");
    if ($query) {
    
    echo "<script>alert('All remarks has been updated.');</script>";
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
    <title>CDSMS New Users</title>
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
                        <h1>View New Users</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="registered-new-users.php">View New Users</a></li>
                            <li class="active">Users</li>
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
                            <div class="card-header"><strong>View</strong><small> Users</small></div>





                                <p style="font-size:16px; color:red" align="center"> </p>
                            <div class="card-body card-block">
 <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select tblregusers.ID,tblregusers.FirstName,tblregusers.LastName,tblregusers.MobileNumber,tblregusers.Email,tblpackages.PackageName,tblpackages.PackageDec,tblpackages.PackageDuration,tblpackages.PackagePrice,tblpackages.PackageDate,tblapplication.ID as aapid, tblapplication.PackID,tblapplication.Status,tblapplication.RegNumber,tblapplication.UserId,tblapplication.TakenFor,tblapplication.RegDate,tblapplication.FullName,tblapplication.Email,tblapplication.MobileNumber,tblapplication.Gender,tblapplication.Age,tblapplication.LicenceNumber,tblapplication.UploadLicence,tblapplication.Address,tblapplication.AlternateNumber,tblapplication.TrainingDate,tblapplication.TrainingTiming,tblapplication.RegDate from tblapplication join tblpackages on tblpackages.ID=tblapplication.PackID join tblregusers on tblregusers.ID=tblapplication.UserId where tblapplication.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>                       <table border="1" class="table table-bordered mg-b-0">
   
 <tr>
                                <th>Registration Number</th>
                                   <td><?php  echo $row['RegNumber'];?></td>
                                    <th>Full Name</th>
                                    <td><?php  echo $row['FullName'];?></td>
                                  </tr>


  
                                       <th>Email</th>
                                        <td><?php  echo $row['Email'];?></td>
                               <th>Mobile Number</th>
                                <td><?php  echo $row['MobileNumber'];?></td>
                            </tr>

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
   
   <td><img src="../users/licimagesimages/<?php echo $row['UploadLicence'];?>" width="200" height="150"></td>
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
$ret1=mysqli_query($con,"select * from tblpaymenthistory where UserId='$cid'");
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
<?php } ?>
<?php if($row['Status']=="" || $row['Status']=="Partial Payment") 
{?>
<tr>
<td colspan="5" align="center">  
<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
Take Action
</button></td> 
</tr>

<?php }} ?>
</table> 
</div>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                 


                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Take Action</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
<form name="submit" method="post" enctype="multipart/form-data"> 

                            <div class="modal-body">
                                <p>
<table>


<tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="" rows="6" cols="50" class="form-control wd-450" required="true"></textarea></td>
  </tr>

<tr>
<th>Deposite Fee: </th>
<td>
  <input type="text" name="depositfee" id="depositfee" class="form-control wd-450" >
</td>
</tr>


  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="Partial Payment" selected="true">Partial Payment</option>
     <option value="Completed">Completed</option>
   </select></td>
  </tr>

  </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Update</button>
                            </div>
                              </form>
                        </div>
                    </div>
                </div>

                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>
