<?php


$userName = "Hi Tubana"; // Replace with dynamic user name from database
$userProfilePic = "tubs.jpg"; // Replace with dynamic user profile picture from database
?>


<!DOCTYPE html>
<html>
<head>
   <title>My Dashboard</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <style>
     body {
         margin: 0;
         padding: 0;
         font-family: Arial, sans-serif;
      }
      .header {
         background-color: #333;
         color: #fff;
         padding: 10px;
      }
      .flex {
         display: flex;
         justify-content: space-between;
         align-items: center;
      }
      .logo {
         font-size: 24px;
         font-weight: bold;
         text-decoration: none;
         color: #fff;
      }
      .navbar {
         display: flex;
         justify-content: space-between;
         align-items: center;
         width: 20%;
      }
      .navbar a {
         color: #fff;
         text-decoration: none;
         font-size: 18px;
         margin: 0 10px;
      }
      .sidebar {
         position: fixed;
         bottom: 0;
         left: 0;
         width: 200px;
         height: 100%;
         background-color: #333;
         color: #fff;
         padding: 20px;
      }

      .sidebar-header {
         display: flex;
         align-items: center;
         margin-top: 40px;
         margin-bottom: 20px;
      }

      .user-logo {
         width: 40px;
         height: 40px;
         border-radius: 50%;
         margin-right: 10px;
      }

      .username {
         font-size: 18px;
         font-weight: bold;
         text-align: center;
         margin-left: 10px;
      }

      .sidebar ul {
         list-style: none;
         padding: 0;
         margin: 0;
         margin-top: 70px;
      }

      .sidebar li {
         margin-bottom: 15px;
         padding: 10px 0;
      }

      .sidebar a {
         color: #fff;
         text-decoration: none;
         font-size: 18px;
         margin-left: 10px;
      }

      .sidebar a i {
         margin-right: 10px;
      }

      .main-content {
         margin-left: 200px; 
      }
   </style>
</head>
<body>

<nav class="sidebar">
   <div class="sidebar-header">
      <img class="user-logo" src="<?php echo $userProfilePic; ?>" alt="User Logo">
      <span class="username"><?php echo $userName; ?></span>
   </div>
   <ul>
      <li><a href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
      <li><a href="#"><i class="fas fa-book"></i>Courses</a></li>
      <li><a href="#"><i class="fas fa-calendar-alt"></i>Schedule Session</a></li>
      <li><a href="#"><i class="fas fa-bookmark"></i>My Booking</a></li>
      <li><a href="#"><i class="fas fa-graduation-cap"></i>Passes Courses</a></li>
      <li><a href="#"><i class="fas fa-star"></i>Reviewer</a></li>
      <li><a href="#"><i class="fas fa-thumbs-up"></i>Ratings</a></li>
      <li><a href="#"><i class="fas fa-cog"></i>System</a></li>
   </ul>
</nav>

<div class="main-content">

</div>

</body>
</html>