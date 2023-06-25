<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CDSMS Packages</title>
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
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<?php include_once('includes/header.php');?>
	
	<div class="banner1">
	</div>
<div class="w3l-heading" style="padding-top: 60px">
	<h3 class="w3ls_head">Packages Available for Car Training</h3>
	</div>
	
 <?php

$ret=mysqli_query($con,"select * from  tblpackages");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
      

       <table border="1" class="table table-bordered mg-b-0">
<tr>

    <th>Package Name</th>

    <td><?php  echo $row['PackageName'];?></td>
  </tr>


   <tr>
    <th>Package Description</th>
    <td><?php  echo $row['PackageDec'];?></td>
  </tr>
 
<tr>
    <th>Training Duration</th>
    <td><?php  echo $row['PackageDuration'];?></td>
  </tr>
  
 <tr>
    <th>Package Price</th>
    <td><?php  echo $row['PackagePrice'];?></td>
  </tr>
 
  
 


</table>

  



<?php } ?>
		</div>
	</div>
	
<!-- //services -->	
	
	<!-- footer -->
	<?php include_once('includes/footer.php');?>

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