<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/Index.css">
	<link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">
	<title>Document</title>
	<style>

		 /* Add the fade-in animation */
		 @keyframes fade-in {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    /* Apply the animation to the elements */
    .fade-in {
      animation: fade-in 1s ease-in-out;
    }

.faq-container {
	margin-top: 10px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 20px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

	.faq-image {
		width: 50%;
	}

	.faq-image img {
		width: 100%;
	}

	.faq-text {
  flex: 0 0 45%; /* Set a fixed width for equal-sized items */
  margin-bottom: 20px; /* Add margin bottom for spacing */
}

	.faq-text h4 {
		margin: 0px;
		color: red;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	.faq-text h1 {
		margin: 0px;
		color: black;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	.faq-text p {
		margin-top: 10px;
		color: red;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	.dropdown {
    border: 1px solid gray;
    box-shadow: 2px 2px 5px gray;
    margin-bottom: 10px;
}

.dropdown-toggle {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    padding: 10px;
}

.dropdown-toggle:hover {
    background-color: #f5f5f5;
}

.icon {
    margin-right: 10px;
    font-size: 18px;
}

.rotate {
    transform: rotate(45deg);
}
</style>
		
	
</head>
<body>





<!-- DATABASE FOR UPDATING THE PRICES 
    // Connect to the database
    $conn = mysqli_connect("localhost", "username", "password", "database_name");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the price from the database
    $sql = "SELECT price FROM courses WHERE course_name='Theoretical Driving Course'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $price = $row["price"];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
		-->


		
		<!-- DATABASE FOR ADMIN UPDATE OF THE VIDEO
			// Connect to the database
		$conn = mysqli_connect("localhost", "username", "password", "database_name");

		// Check connection
		if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
		}

		// Retrieve the video file path from the database
		$sql = "SELECT file_path FROM videos WHERE id = 1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
				// Output data of each row
				while($row = mysqli_fetch_assoc($result)) {
						$file_path = $row["file_path"];
				}
		} else {
				echo "0 results";
		}

		mysqli_close($conn);
-->





<div class="b2b-banner fade-in">


        <center>
        <table border="0">
            <tr>
                <td width="80%">
                    <font class="edoc-logo"  style="color: black;">BDS </font>
                    <font class="edoc-logo-sub" style="color: black;">| B2b Driving School</font>
                </td>
                <td width="10%">
                   <a href="login.php"  class="non-style-link"><p class="nav-item" style="color: black;">LOGIN</p></a>
                </td>
                <td  width="10%">
                    <a href="signup.php" class="non-style-link"><p class="nav-item" style="padding-right: 10px; color: black;" >REGISTER</p></a>
                </td>
            </tr>
            
            <tr>
                <td  colspan="3">
                    <p class="heading-text" style="color: black;" >B<span style="color:RED;">2</span>B DRIVING SCHOOL</p>

                </td>
            </tr>
            <tr>
                
                <td colspan="3">
                    <center>
                    <a href="login.php" >
                        <input type="button" value="Make Appointment" class="login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                    </a>
                </center>
                </td>
                
            </tr>
            <tr>
                <td colspan="3">
                   
                </td>
            </tr>
        </table>
        <p class="sub-text2 footer-hashen">A Web Solution by Team Swakto.</p>
    </center>
    
   

    <img style="width: 100%; height: 500px;" src="banner/New-Home-Banner-2.png" alt="B2b">
  </div>

	

	<div class="courses-container fade-in">
    
  
	
	

	<div class="course-container-1">
		<div class="course-1">	
			<img class="TDC" style="height: 40%; width: 90%; border-radius: 10px; border: solid green;" src="images/TDC.jpg" alt="none">

			<div class="title-1">	
				<h1 style="text-align: center;">Theoretical <br> Driving Course</h1>

				<p style="text-align: center; margin-bottom: 15px;">Online or Face to Face</p>
			</div>


			
			<div style="margin: auto;
     width: 50%; border: 3px solid green; text-align: center;
     padding: 10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: smaller;">
     <?php
         $price = 50.99;
         echo "Price in PHP: " . $price;
     ?>
 </div> 

		</div>

		
		
	</div>

	<div class="course-container-2">
		<div class="course-1">	
		<img class="TDC" style="height: 40%; width: 90%; border-radius: 10px; border: solid green;" src="images/TDC.jpg" alt="none">

			<div class="title-1">	
				<h1 style="text-align: center;">Motorcycle <br> Tricycle Course</h1>

				<p style="text-align: center; margin-bottom: 15px;">Manual or Automatic</p>
			</div>
			
			<div style="margin: auto;
     width: 50%; border: 3px solid green; text-align: center;
     padding: 10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: smaller;">
     <?php
         $price = 50.99;
         echo "Price in PHP: " . $price;
     ?>
 </div> 
		</div>
		
	</div>

	<div class="course-container-3">
		<div class="course-1">	
		<img class="TDC" style="height: 40%; width: 90%; border-radius: 10px; border: solid green;" src="images/TDC.jpg" alt="none">


			<div class="title-1">	
				<h1 style="text-align: center;">Car Course</h1>

				<p style="text-align: center; margin-bottom: 15px;">Manual or Automatic</p>
			</div>
			
			<div style="margin: auto;
     width: 50%; border: 3px solid green; text-align: center;
     padding: 10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: smaller;">
     <?php
         $price = 50.99;
         echo "Price in PHP: " . $price;
     ?>
 </div> 
		</div>
		
	</div>

	<div class="course-container-4">
		<div class="course-1">	
		<img class="TDC" style="height: 40%; width: 90%; border-radius: 10px; border: solid green;" src="images/TDC.jpg" alt="none">


			<div class="title-1">	
				<h1 style="text-align: center;">Van Course</h1>

				<p style="text-align: center; margin-bottom: 15px;">Manual or Automatic</p>
			</div>
			
			<div style="margin: auto;
     width: 50%; border: 3px solid green; text-align: center;
     padding: 10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: smaller;">
     <?php
         $price = 50.99;
         echo "Price in PHP: " . $price;
     ?>
 </div> 
		</div>

		
		
	</div>

</div>

<div class="b2b-banner fade-in">
    <video width="50%" height="auto" controls>
      <source src="<?php echo $file_path; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

	<div class="faq-container fade-in">
	<div class="footer-image-container">
		<img
		
	<div>

</div>

	
<script src="script.js">

	const bannerImg = document.querySelector(".b2b-banner img");
const courses = document.querySelectorAll(".course-1");

bannerImg.addEventListener("click", () => {
  bannerImg.src = "New-Home-Banner-2-clicked.png";
});

courses.forEach((course) => {
  course.addEventListener("mouseenter", () => {
    course.style.backgroundColor = "darkgreen";
  });

  course.addEventListener("mouseleave", () => {
    course.style.backgroundColor = "#F2F2F2";
  });

  course.addEventListener("click", () => {
    const description = course.querySelector(".course-description");
    description.classList.toggle("show");
  });
});

</script>
</body>
</html>