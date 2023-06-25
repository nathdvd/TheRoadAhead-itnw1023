<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SuperAdmin</title>
	<link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<?php

    //learn from w3schools.com

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='s'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    

    //import database
    include("../connection.php");

    
    ?>
    <div class="container">

        <div class="menu" style="background-color:#2F323A;">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                    <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title" style="color: white;">Super Admin</p>
                                    <p class="profile-subtitle" style="color: white;">SuperAdmin@admin.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../logout.php" ><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-active " >
                        <a href="index.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text" style="color: white;">Dashboard</p></a></div></a>
                    </td>
                </tr>
           
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="admin.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Admin</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="schedule.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">View Schedule</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="Client.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Client</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="all_posts.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Rating and Feedback</p></a></div>
                    </td>
                </tr>
            </table>
        </div>
</body>
</html>