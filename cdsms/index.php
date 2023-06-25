<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $enquiry=$_POST['enquiry'];

    $query=mysqli_query($con,"insert into  tblenquiry(FullName,Email,MobileNumber,Enquiry) value('$fullname','$email','$mobilenumber','$enquiry')");
        if ($query) {
  echo "<script>window.location.href='enq-thank-you.php'</script>";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CDSMS Home Page</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Driving School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<?php include_once('includes/header.php');?>
	<div class="banner">
		<div class="container">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Learn How To Be A Safe Driver For Life</h3>
									<p>This Advanced Car Driving School Management system can reduce the efforts of human power and wealth.</p>
									</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Drive A car With Us</h3>
									<p>This Advanced Car Driving School Management system can reduce the efforts of human power and wealth.</p>
									</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Learn How To Be A Safe Driver For Life</h3>
									<p>This Advanced Car Driving School Management system can reduce the efforts of human power and wealth.</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

		</div>
	</div>
<!-- //banner -->	
<!-- banner-bottom-icons -->
	<div class="banner-bottom-icons">
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">Our Services </h2>
			</div>
		<div class="col-md-4 w3_banner_bottom_icons_left hover15">
			<div class="w3_agile_banner_bottom">
				<figure><img src="images/3.jpg" alt=" " class="img-responsive" /></figure>
			</div>
		</div>
		<div class="col-md-8 w3_banner_bottom_icons_right">
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class="fa-car"></i>
					<h3>Pick and Drop Services</h3>
					<p>Pick and Drop facility is provided to our customer.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class="fa-bell"></i>
					<h3>Experienced Instructors</h3>
					<p>Trained and certified instructors who provide all the teaching services. In addition, the company has a fleet of ten cars (both manual and automatic transmission) and five computer simulators that are used to train clients..</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class="fa-credit-card"></i>
					<h3>Women Oriented Services</h3>
					<p>Special initiatives that have lady instructors for women learners..</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class="fa-thumbs-up"></i>
					<h3>Driving Success</h3>
					<p>The company is preparing plans to launch a new commercial drivers training program that will provide greater margins that the ordinary operators or driver improvement programs.</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom-icons -->
<!-- register -->
	<div class="register">
		<div class="container">
			<div class="col-md-6 w3layouts_register_right">
				<form action="#" method="post">
				<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>	
					<input name="fullname" placeholder="Full Name" type="text" required="true">
					<input name="email" placeholder="Email" type="email" required="true">
					<input name="mobilenumber" placeholder="Mobile Number" type="text" maxlength="10" required="true">
				<input name="enquiry" placeholder="Enquiry About" type="text" required="true" style="margin-top:4%">
					<input type="submit" name="submit" value="Enquiry Now">
				</form>
			</div>
			<div class="col-md-6 w3layouts_register_left">
				<h3><span>Enquiry </span> now</h3>
				<p>Enquiry now for driving classes to learn car driving with our Trained and certified instructors.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php

if(isset($_POST['subscribe']))
  {
    
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    

    
    $query1=mysqli_query($con,"insert into   tblsubscribers(FullName,Email) value('$fullname','$email')");
    if ($query1) {

  echo "<script>alert('Subscribed successfully');</script>";
  echo "<script>window.location.href='index.php'</script>";

    $msg="Your enquiry has been sent successfully.";
  }
  else
    {
    	  echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

  
}

  ?>
	<div class="news-letter">
		<div class="container">
			<div class="w3l-heading">
				<h3 class="w3ls_head">Subscribe Here </h3>
			</div>
			<div class="agileinfo-subscribe">
				<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>	
				<form action="#" method="post">
					<input type="text" placeholder="Name" name="fullname"  required="true">
					<input type="email" placeholder="Email" name="email"  required="true">
					<input type="submit" name="subscribe" value="Subscribe">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	<!-- //news-letter -->


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