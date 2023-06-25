<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LTO online exam</title>
	<link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/lto.css">
        


    <title>Settings</title>
    <style>
        body{
             background-color:darkred;
        }
        .dashbord-tables{
            animation: transitionIn-Y-over 0.5s;
        }
        .filter-container{
            animation: transitionIn-X  0.5s;
        }
        .sub-table{
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
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



    // Retrieve the link from the "lto_links" table
    $linkQuery = $database->query("SELECT link FROM lto_links WHERE id = 2");
    if ($linkQuery) {
        $linkData = $linkQuery->fetch_assoc();
        $link = $linkData['link'];
    } else {
        // Handle query error if needed
        $link = '#'; // Provide a fallback link
    }


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
                    <td class="menu-btn ">
                        <a href="reviewer.php" class="non-style-link-menu"><div><p class="menu-text" style="color: white;">Reviewer</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn  menu-active ">
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

        <div class="dash-body">
            <p style="font-size:40px; margin-top:10px; margin-bottom: 5px; font-weight:800; color: white; text-align: center; text-shadow: 5px 5px 10px black">B<span style="color: red;">2</span>B Driving School</p>
        </div>

<div class="logo">
    <img src="lto.png">
    <p>Republic of the Philippines</p>
    <h1>LAND TRANSPORTATION OFFICE</h1>
    <h2>Department of Transportation</h2>
</div>
<div class="logo1">
    <img src="lto.png">
    <h1>Click here:</h1>
    <a href="<?php echo $link; ?>" target="_blank">LTO LTMS PORTAL LINK DIRECTORY</a>
</div>

<div class="arr">
    <img src="ar.png">
</div>
<div class="arr2">
    <img src="r2.png">
</div>
<div class="log">
    <img src="B2BLOGO.png">
    <p>B2B DRIVING SCHOOL BETTER DRIVING TO YOUR BEST DESTINATION</p>
</div>


</body>
</html>