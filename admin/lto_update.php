<?php
    // Learn from w3schools.com

    session_start();

    if (isset($_SESSION["user"])) {
        if ($_SESSION["user"] == "" or $_SESSION['usertype'] != 'a') {
            header("location: ../login.php");
            exit;
        }
    } else {
        header("location: ../login.php");
        exit;
    }

    // Import database
    include("../connection.php");

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = $_POST["link"];
        
        // Check if a link already exists in the database
        $existingLinkQuery = $database->query("SELECT * FROM lto_links");
        $existingLink = $existingLinkQuery->fetch_assoc();

        if ($existingLink) {
            // If a link already exists, update it
            $stmt = $database->prepare("UPDATE lto_links SET link = ? WHERE id = ?");
            $stmt->bind_param("si", $link, $existingLink['id']);
            $message = $stmt->execute() ? "Link updated successfully." : "Error updating the link.";
            $stmt->close();
        } else {
            // If no link exists, insert a new one
            $stmt = $database->prepare("INSERT INTO lto_links (link) VALUES (?)");
            $stmt->bind_param("s", $link);
            $message = $stmt->execute() ? "Link added successfully." : "Error adding the link.";
            $stmt->close();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - LTO Links</title>
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
        
    <title>Dashboard</title>
    <style>
        body {
            background-color: darkgreen;
            color: #fff;
        }

        .container-form {
          margin-top: 15%;
          margin-left: 30%;
        }

        .container-lto {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 50px;
            background-color: gray;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: red;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #cc0000;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
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
                                    <p class="profile-title" style="color: white;">Administrator</p>
                                    <p class="profile-subtitle" style="color: white;">Admin@admin.com</p>
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

                <tr class="menu-row">
                    <td class="menu-btn  ">
                        <a href="doctors.php" class="non-style-link-menu " ><div><p class="menu-text" style="color: white;">Dashboard</p></a></div>
                    </td>
                </tr>
               
                <tr class="menu-row">
                    <td class="menu-btn  ">
                        <a href="doctors.php" class="non-style-link-menu " ><div><p class="menu-text" style="color: white;">Instructor</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="schedule.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text" style="color: white;">Add Schedule</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="indexS.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text" style="color: white;">Schedule</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn ">
                        <a href="appointment.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Appointment</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                        <a href="patient.php" class="non-style-link-menu" ><div><p class="menu-text" style="color: white;">Clients</p></a></div>
                    </td>

                <tr class="menu-row" >
                    <td class="menu-btn ">
                    <a href="lto_update.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text" style="color: white;">LTO Update Link</p></a></div></a>
                  </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn ">
                    <a href="all_posts.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text" style="color: white;">View Rates and Feedback</p></a></div></a>
                  </td>
                </tr>
            </table>
        </div>

<div class="container-form">
    <div class="container-lto">
        <h1>Add/Update LTO Link</h1>
        <form method="POST" action="">
            <label for="link">Link:</label>
            <input type="text" name="link" id="link" required>
            <input type="submit" value="Save Link">
        </form>
        <?php if (isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </div>


    
</body>
</html>
