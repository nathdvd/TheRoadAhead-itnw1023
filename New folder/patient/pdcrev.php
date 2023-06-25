<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
     <link rel="stylesheet" href="../css/reviewer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
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
    <div class="logo-dr">
    <img src="B2BLogo.png">
</div>
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


    //echo $userid;
    //echo $username;
    
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
                    <td class="menu-btn  "  >
                        <a href="index.php" class="non-style-link-menu non-style-link-menu-active" style="color: white;"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn " >
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
                    <td class="menu-btn  menu-active">
                        <a href="reviewer.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">Reviewer</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="lto.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">LTO Online Exam</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td  class="menu-btn  " >
                        <a href="settings.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Settings</p></a></div>
                    </td>
                </tr>

                
            </table>
        </div>

<div class="text-cont">
    <h1>Questionnaire for NON-PROFESSIONAL</h1>
    <h2>DRIVER’S LICENSE APPLICANTS</h2>
</div>
        <div class="container2">

           <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="PIC/rn1.png"></div>
    <div class="swiper-slide"><img src="PIC/rn2.png"></div>
    <div class="swiper-slide"><img src="PIC/rn3.png"></div>
    <div class="swiper-slide"><img src="PIC/rn4.png"></div>
    <div class="swiper-slide"><img src="PIC/rn5.png"></div>
    <div class="swiper-slide"><img src="PIC/rn6.png"></div>
    <div class="swiper-slide"><img src="PIC/rn7.png"></div>
    <div class="swiper-slide"><img src="PIC/rn8.png"></div>
    <div class="swiper-slide"><img src="PIC/rn9.png"></div>
    <div class="swiper-slide"><img src="PIC/rn10.png"></div>
    <div class="swiper-slide"><img src="PIC/rn11.png"></div>
    <div class="swiper-slide"><img src="PIC/rn12.png"></div>
    <div class="swiper-slide"><img src="PIC/rn13.png"></div>
    <div class="swiper-slide"><img src="PIC/rn14.png"></div>
    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  
</div>
            
        </div>

<div class="img-back">
    <img src="lto.png">
</div>
<div class="img-back2">
    <img src="lto1.png">
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {

  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
        </script>
</body>
</html>