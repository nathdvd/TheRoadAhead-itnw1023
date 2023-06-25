<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-6 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
					<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>		<p style="color: white"> Address: <?php  echo $row['PageDescription'];?></p>
<p style="color: white"> Contact Number: <?php  echo $row['MobileNumber'];?></p>
<p style="color: white"> Email: <?php  echo $row['Email'];?></p>
<p style="color: white">Timing:<?php  echo $row['Timing'];?></p>
	<?php } ?>
					</div>
				</div>
				<div class="col-md-6 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="packages.php">packages</a></li>
							<li><a href="enquiry-form.php">Enquiry</a></li>
							<li><a href="admin/index.php">Admin</a></li>
							<li><a href="users/signup.php">User Signup</a></li>
						</ul>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2022 Car Driving School Management System . All Rights Reserved</p>
			</div>
		</div>
	</div>