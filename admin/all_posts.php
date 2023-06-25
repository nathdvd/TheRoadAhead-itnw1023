<?php

include 'components/connect.php';
include 'sidebar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>B2B Instructors</title>
  

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylekoto.css">
   <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">

   <style>

       body{
         background-color: darkred;
       }
       

    </style>

</head>
<body>







<!-- view all posts section starts  -->

<section class="custom-all-posts">

   <div class="custom-heading1"><h1 style="color:white; text-shadow: 5px 5px 10px black;">B2B INSTRUCTORS RATINGS SECTION</h1></div>

   <div class="custom-box-containers">

   <?php
      $select_posts = $conn->prepare("SELECT * FROM `posts`");
      $select_posts->execute();
      if($select_posts->rowCount() > 0){
         while($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC)){

         $post_id = $fetch_post['id'];

         $count_reviews = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ?");
         $count_reviews->execute([$post_id]);
         $total_reviews = $count_reviews->rowCount();
   ?>
   <div class="custom-boxs">
      <img src="uploaded_files/<?= $fetch_post['image']; ?>" alt="" class="custom-image">
      <h3 class="custom-titles"><?= $fetch_post['title']; ?></h3>
      <p class="custom-total-reviews"><i class="fas fa-star"></i> <span><?= $total_reviews; ?></span></p>
      <a href="view_post.php?get_id=<?= $post_id; ?>" class="inline-btn">view post</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no posts added yet!</p>';
   }
   ?>

   

   </div>

</section>

<!-- view all posts section ends -->
















</body>
</html>