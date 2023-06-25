<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/Tdc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title></title>
	<style>
        body{
             background-color:darkred;
        }
        .popup{
            animation: transitionIn-Y-bottom 0.5s;
        }
        .sub-table{
            animation: transitionIn-Y-bottom 0.5s;
        }
</style>

	<title></title>
</head>
<body>


<?php
    //learn from w3schools.com

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='p'){
            header("location: ../login.php");
        }else{
            $useremail=$_SESSION["user"];
        }

    }else{
        header("location: ../login.php");
    }
    

    //import database
    include("../connection.php");
    $userrow = $database->query("select * from patient where pemail='$useremail'");
    $userfetch=$userrow->fetch_assoc();
    $userid= $userfetch["pid"];
    $username=$userfetch["pname"];

    ?>
    <div class="container">
        <div class="menu" style="background-color:#2F323A;">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:25px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                    <img src="../img/user.png" alt="" width="100%" style="border-radius:50%; border: solid; border-color:blue;">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title" style="color: white;"><?php echo substr($username,0,13)  ?>..</p>
                                    <p class="profile-subtitle" style="color: white;"><?php echo substr($useremail,0,22)  ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../logout.php" ><input type="button" value="Log out" class="logout-btn btn-primary-soft btn" style="color: black;"></a>
                                </td>
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn"  >
                        <a href="index.php" class="non-style-link-menu non-style-link-menu-active" style="color: white;"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-active " >
                        <a href="courses.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">All Courses</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn " >
                        <a href="doctors.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">Instructor Available</p></a></div>
                    </td>
                </tr>
                
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="schedule.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">Scheduled Sessions</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn   ">
                        <a href="appointment.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">My Bookings</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="all_posts.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">Ratings</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="ratings.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">Reviewer</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="lto.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">LTO Online Exam</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td  class="menu-btn   " >
                        <a href="settings.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Settings</p></a></div>
                    </td>
                </tr>
                
                
            </table>

            <div class="headdd">
            <section id="mess">
            	<div class="mess-head">
            	
            	<h1>THEORETICAL DRIVING COURSE</h1>
            	<p>The TDC or Theoretical Driving Course, is required for new drivers and applicants who seek to have a driver’s license for the first time. <br>They will be given a certificate after completing the 15-hour TDC lecture, which is one of the requirements for obtaining a Student-Driver’s Permit.</p>
            			

            			<!----containerko--->
            			<div class="mess-container">
            		<div class="mess-box">

            			<!---img-->
            			<div class="mess-img">
            				<img src="tdctu.jpg" alt="mess">
            			</div>


            			<!---text-->
            			<div class="mess-txt">
            				<span>FACE TO FACE TDC
            					<br>15 – hrs TDC Face to Face Lecture
								<br>3 days | 5 hrs per day</span>
                                <br><br>
								<p>Inclusion:
										<br>Filipino Drivers Manual
										<br>Certificate of Completion</p>
								<br><br><br><br>
                                <a href="#" class="mess-title" style="text-decoration: none;">You want to schedule TDC Program?</a>
            			</div>
            		</div>

                    
            		
            	</div>

            	</div>

            		
            	
            </section>
            </div>
</body>
</html>