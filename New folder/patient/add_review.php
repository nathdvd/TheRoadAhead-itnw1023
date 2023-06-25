<?php

session_start();

if (isset($_SESSION["user"])) {
    if ($_SESSION["user"] == "" or $_SESSION['usertype'] != 'p') {
        header("location: ../login.php");
    } else {
        $useremail = $_SESSION["user"];
    }
} else {
    header("location: ../login.php");
}

// Import database
include("../connection.php");
$userrow = $database->query("SELECT * FROM patient WHERE pemail='$useremail'");
$userfetch = $userrow->fetch_assoc();
$userid = $userfetch["pid"];
$username = $userfetch["pname"];

?>

<?php

include 'components/connect.php';
include 'sidebar.php';

if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('location:all_posts.php');
}

if (isset($_POST['submit'])) {

    if ($userid != '') {

        $id = create_unique_id();
        $title = $_POST['title'];
        $title = filter_var($title, FILTER_SANITIZE_STRING);
        $description = $_POST['description'];
        $description = filter_var($description, FILTER_SANITIZE_STRING);
        $rating = $_POST['rating'];
        $rating = filter_var($rating, FILTER_SANITIZE_STRING);

        $verify_review = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ? AND user_id = ?");
        $verify_review->execute([$get_id, $userid]);

        if ($verify_review->rowCount() > 0) {
            $warning_msg[] = 'Your review has already been added!';
        } else {
            $add_review = $conn->prepare("INSERT INTO `reviews`(id, post_id, user_id, rating, title, description) VALUES(?,?,?,?,?,?)");
            $add_review->execute([$id, $get_id, $userid, $rating, $title, $description]);
            $success_msg[] = 'Review added!';
        }

    } else {
        $warning_msg[] = 'Please log in first!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Review</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css2/add-review.css">
   <link rel="stylesheet" href="../css/animations.css">  
   <link rel="stylesheet" href="../css/main.css">  
   <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<!-- header section starts  -->
<?php include 'components/header.php'; ?>
<!-- header section ends -->

<!-- add review section starts  -->

<section style="padding-left: 20%; padding-top:10%;" class="one-account-form">

   <form action="" method="post">
      <h3>Post Your Review</h3>
      <p class="placeholder">Review Title <span>*</span></p>
      <input type="text" name="title" required maxlength="50" placeholder="Enter review title" class="one-box" style="width: 100%">
      <p class="placeholder">Review Description</p>
      <textarea name="description" class="one-box" placeholder="Enter review description" maxlength="1000" cols="30" rows="10" style="width: 100%"></textarea>
      <p class="placeholder">Review Rating <span>*</span></p>
      <select name="rating" class="one-box" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>
      <input type="submit" value="Submit Review" name="submit" class="btn">
      <a href="view_post.php?get_id=<?= $get_id; ?>" class="option-btn">Go Back</a>
   </form>

</section>

<!-- add review section ends -->

<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>
