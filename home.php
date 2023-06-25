<?php
//session_start();

//$user_id = $_SESSION['user_id'];

//if (!isset($user_id)) {
   //header('location: login.php');
   ///exit;
//}

if (isset($_POST['add_to_cart'])) {
   // Existing code for adding products to the cart
   // ...
}

include 'config.php';


// Retrieve the latest video path from the database

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="css/Index.css">
   <style>
      body {
        background-image: url("images/b2b_bg.png");
        background-repeat: no-repeat;
        background-size:cover;
        height: fit-content;
        position: relative;
      }
      
      .video-container {
      
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      margin-top: 2%;


    }
    .video {
      display: grid;
      grid-template-columns: 1fr;
      align-items: center;
      max-width: 80%;
      max-height: 80%;
    }

    .b2b-video{
      display: flex;
      justify-content: center;
      align-items: center;
     
    }






   </style>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="b2b-banner fade-in">
        <center>
        <table border="0">
            <tr>
                <td width="80%">
                    <font class="edoc-logo"  style="color: black;">BDS </font>
                    <font class="edoc-logo-sub" style="color: black; font-size: 15px; ">| B2B Driving School</font>
                </td>
                <td width="10%">
                   <a href="login.php"  class="non-style-link"><p class="nav-item" style="color: black; font-size: 20px; font-weight: 600; ">LOGIN</p></a>
                </td>
                <td  width="10%">
                    <a href="signup.php" class="non-style-link"><p class="nav-item" style="padding-right: 10px; color: black; font-size: 20px; font-weight: 600; " >REGISTER</p></a>
                </td>
            </tr>
            
        </table>
    </center>
    
  </div>




   <section class="home">
      <div class="content">
         <a href="about.php" class="white-btn">Discover more</a>
      </div>
   </section>





   <section class="products">
      <h1 class="title">Service Offered</h1>

      <div class="box-container">
         <?php  
            $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
            if(mysqli_num_rows($select_products) > 0){
               while($fetch_products = mysqli_fetch_assoc($select_products)){
         ?>
         <form action="" method="post" class="box">
            <img class="image" src="admin/uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
            <div class="name"><?php echo $fetch_products['name']; ?></div>
            <div class="price">&#8369;<?php echo $fetch_products['price']; ?></div>

            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
            <input type="submit" value="Inquire Now" name="add_to_cart" class="btn">
         </form>
         <?php
            }
         } else {
            echo '<p class="empty">No products added yet!</p>';
         }
         ?>
      </div>

      
       <div class="video-container">

            <div class="b2b-video">
                <video class="video" src="b2b_video.mp4" autoplay controls>Your browser does not support the video tag.</video>
            </div>
            
      </div>
            

        
          



      </div>






   <section class="about">
      <div class="flex">
         <div class="image">
            <img src="images/b2b-staff.jpg" alt="">
         </div>
         <div class="content">
            <h3>About Us</h3>
            <p>To have a great team, there is no surefire recipe for success. A combination of solid leadership, communication, and access to good resources contribute to productive collaboration, but it all comes down to having people who understand each other and work well together. Not every team needs that one superstar player to excel. Having the right mix of trust, ambition, and encouragement among our team members is the key.
            The foundation of every great team is a direction that energizes, encourages, develops, and engages its members.</p>
            <a href="about.php" class="btn">Read more</a>
         </div>
      </div>
   </section>

   <section class="home-contact">
      <div class="content">
         <h3>Join us for a better life and beautiful future</h3>
         <p>Become one of B2B Driving School staff and instructors that provide efficient and quality services to our aspiring drivers to ensure the safety of everyone on the road.</p>
         <a href="contact.php" class="white-btn">Contact us</a>
      </div>
   </section>

   <!-- Custom JS file link -->
   <script src="js/script.js"></script>
</body>
</html>
