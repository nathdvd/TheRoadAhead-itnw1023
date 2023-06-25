<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Driving School Managemnt System</title>
<!-- custom-theme -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>

	<?php include_once('includes/header.php');?>
	<div class="banner1">
	</div>
<!-- //banner -->	
<!-- about -->
	<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	<div class="about-top">
		<div class="container">
			<div class="w3l-heading">


				<h2 class="w3ls_head"><?php  echo $row['PageTitle'];?> </h2>
			</div>
			<div class="wthree-services-bottom-grids">
				<div class="col-md-6 wthree-services-left">
					<img src="images/5.jpg" Class="img-responsive" alt="">
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						
						<p><strong>Address: </strong><?php  echo $row['PageDescription'];?></p>
						<p><strong>Email: </strong><?php  echo $row['Email'];?></p>
						<p><strong>Contact Number: </strong><?php  echo $row['MobileNumber'];?></p>
						<p><strong>Timing: </strong><?php  echo $row['Timing'];?></p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- //about-top -->


	<!-- footer -->
	<?php include_once('includes/footer.php');?>
	<!-- //footer -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>