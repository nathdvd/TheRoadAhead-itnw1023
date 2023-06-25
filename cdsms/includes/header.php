<div class="header">
		<div class="header_left">
			<ul>
				<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php  echo $row['PageDescription'];?></li>
				<?php } ?>
			</ul>
		</div>
		<div class="header_right">
			<a href="admin/index.php"><span data-hover="Admin Login" style="color: white">Admin</span></a> 
		</div>
			<div class="clearfix"></div>
		
	</div>
	<div class="header-bottom">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.php"><span>Driving </span>School</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="about.php"><span data-hover="About Us">About Us</span></a></li>
					<li><a href="packages.php"><span data-hover="Packages">Packages</span></a></li>
						
					<li><a href="contact-us.php"><span data-hover="Contact Us">Contact Us</span></a></li>
				
							<li><a href="users/signup.php"><span data-hover="User Signup">User Signup</span></a></li>
<li><a href="enquiry-form.php"><span data-hover="Enquiry">Enquiry</span></a></li>
					</ul>
				</nav>
			</div>
			
		</nav>
	</div>