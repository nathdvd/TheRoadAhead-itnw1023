<?php
// Learn from w3schools.com
// Unset all the server-side variables
session_start();
$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$_SESSION["date"] = $date;

// Array of cities
$cities = array(
    "Abucay",
    "Bagac",
    "Balanga City",
    "Dinalupihan",
    "Hermosa",
    "Limay",
    "Mariveles",
    "Morong",
    "Orani",
    "Orion",
    "Pilar",
    "Samal"
);

if ($_POST) {
    // Validate date of birth
    $dob = $_POST['dob'];
    $currentDate = date('Y-m-d');
    $age = date_diff(date_create($dob), date_create($currentDate))->y;

    if ($age < 17 || $dob >= '2005-01-01') {
        echo '<script>alert("You must be at least 17 years old and born before 2005 to create an account."); window.location.href = "signup.php";</script>';
        exit();
    }

    $_SESSION["personal"] = array(
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'gender' => $_POST['gender'],
        'address' => $_POST['address'],
        'dob' => $dob,
        'city' => $_POST['city'], 
        'barangay' => $_POST['barangay'] 
    );

   

    header("Location: create-account.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">

    <title>Sign Up</title>
    <style>
        body {
            background-image: url("b2b_bg.png");
        }
    </style>

    <script>
        function updateBarangays() {
            var citySelect = document.getElementById("city");
            var barangaySelect = document.getElementById("barangay");
            var selectedCity = citySelect.value;
            
            var barangays = {
    "Abucay": [
        "Bangkal",
        "Bagumbayan",
        "Calaylayan",
        "Capitangan",
        "Gabon",
        "Laon",
        "Mabatang",
        "Pag-asa",
        "Poblacion",
        "Samao",
        "San Antonio",
        "San Isidro",
        "San Jose",
        "San Juan",
        "San Miguel",
        "San Pedro",
        "San Vicente",
        "Santo Niño",
        "Wawa"
       
    ],
    "Bagac": [
        "Bagumbayan",
        "Banawang",
        "Binuangan",
        "Binukawan",
        "Ibaba",
        "Pag-asa",
        "Parang",
        "Quinawan",
        "San Antonio",
        "San Isidro",
        "San Jose",
        "San Juan",
        "San Miguel",
        "San Vicente",
        "Santa Catalina",
        "Santo Domingo",
        "Santo Niño",
        "Totalong"
    ],
    "Balanga City": [
        "Bagong Silang",
        "Barangay I (Poblacion)",
        "Barangay II (Poblacion)",
        "Barangay III (Poblacion)",
        "Barangay IV (Poblacion)",
        "Barangay V (Poblacion)",
        "Barangay VI (Poblacion)",
        "Barangay VII (Poblacion)",
        "Barangay VIII (Poblacion)",
        "Barangay IX (Poblacion)",
        "Barangay X (Poblacion)",
        "Barangay XI (Poblacion)",
        "Barangay XII (Poblacion)",
        "Barangay XIII (Poblacion)",
        "Barangay XIV (Poblacion)",
        "Cabog-Cabog",
        "Camacho",
        "Central",
        "Cupang North",
        "Cupang Proper",
        "Cupang West",
        "Doña Francisca",
        "Ibayo",
        "Malabia",
        "Munting Batangas",
        "Poblacion",
        "Puerto Rivas Ibaba",
        "Puerto Rivas Itaas",
        "San Jose",
        "Sibacan",
        "T. Camacho",
        "Tortugas"
    ],
        "Dinalupihan": ["A1 (Poblacion)",
        "A5 (Poblacion)", 
        "Balsik", 
        "Bani", 
        "Bayan-bayanan", 
        "Bonifacio (Poblacion)", 
        "Burgos (Poblacion)", 
        "Colo", 
        "Daang Bago", 
        "Dalao", 
        "Del Pilar (Poblacion)",
        "General Luna (Poblacion)", 
        "Happy Valley", 
        "Hermosa (Poblacion)", 
        "Ipag", 
        "Luacan", 
        "Mabini Extension (Poblacion)", 
        "Mabini Proper (Poblacion)", 
        "Maligaya (Poblacion)", 
        "Naparing", 
        "New San Jose", 
        "Old San Jose", 
        "Padre Dandan (Poblacion)", 
        "Pag-asa (Poblacion)", 
        "Pagalanggang (Poblacion)", 
        "Payangan", 
        "Pita", 
        "Princesa", 
        "Rizal (Poblacion)", 
        "Roosevelt (Poblacion)", 
        "Saguing", 
        "San Benito (Poblacion)", 
        "San Isidro (Poblacion)", 
        "San Pablo (Poblacion)", 
        "Santa Isabel (Poblacion)", 
        "Santa Rosa (Poblacion)", 
        "Santiago (Poblacion)", 
        "Sapang Balas", 
        "Tucop", 
        "Tubo-tubo"],
        
        "Hermosa": [
            "Almacen", 
            "Balsik", 
            "Balon Anito", 
            "Banal na Bundok", 
            "Batong Dalig", "Capunitan", 
            "Mabiga", 
            "Palihan", 
            "Panducot", 
            "Palihan", 
            "Parayray", 
            "Payangan", 
            "Polo", 
            "Pulo", 
            "Saba", 
            "San Agustin", 
            "San Antonio", 
            "San Isidro", 
            "San Jose", 
            "San Juan", 
            "San Nicolas", 
            "San Pedro", 
            "San Vicente", 
            "Santa Cruz", 
            "Santo Cristo", 
            "Santo Niño", 
            "Tampac I", 
            "Tampac II", 
            "Wawa"],

    "Limay": [
            "Alangan",
            "Duale",
            "Kitang 2 & Luz",
            "Kitang I",
            "Lamao",
            "Landing",
            "Poblacion",
            "Reformista",
            "San Francisco De Asis",
            "St. Francis II",
            "Townsite",
            "Wawa"],
    "Mariveles": [
            "Alion", 
            "Balon Anito", 
            "Baseco Country (NASSCO)", "Batangas II", 
            "Biaan", 
            "Cabcaben", 
            "Camaya", 
            "Ipag", 
            "Lucanin", 
            "Malaya", 
            "Maligaya", 
            "Mt. View", 
            "Poblacion", 
            "San Carlos",
            "San Isidro", 
            "Sisisman", 
            "Townsite"],
        
    "Morong": [
        "Binaritan",
         "Binaritan Proper ", "Mabayo", 
         "Nagbalayong", 
         "Poblacion", 
         "Sabang"],

    "Orani": [
    "Apollo",
    "Bagong Paraiso (Pob.)",
    "Balut (Pob.)",
    "Bayan (Pob.)",
    "Calero (Pob.)",
    "Centro I (Pob.)",
    "Centro II (Pob.)",
    "Dona",
    "Kabalutan",
    "Kaparangan",
    "Maria Fe",
    "Masantol",
    "Mulawin",
    "Pag-asa",
    "Palihan (Pob.)",
    "Pantalan Bago (Pob.)",
    "Pantalan Luma (Pob.)",
    "Parang Parang (Pob.)",
    "Puksuan",
    "Sibul",
    "Silahis",
    "Tagumpay",
    "Tala",
    "Talimundoc",
    "Tapulao",
    "Tenejero (Pob.)",
    "Tugatog",
    "Wawa (Pob.)"
],

"Orion": [
    "Arellano (Pob.)",
    "Bagumbayan (Pob.)",
    "Balagtas (Pob.)",
    "Balut (Pob.)",
    "Bantan",
    "Bilolo",
    "Calungusan",
    "Camachile",
    "Daang Bago (Pob.)",
    "Daang Bilolo (Pob.)",
    "Daang Pare",
    "General Lim (Kaput)",
    "Kapunitan",
    "Lati (Pob.)",
    "Lusungan (Pob.)",
    "Puting Buhangin",
    "Sabatan",
    "San Vicente (Pob.)",
    "Santa Elena",
    "Santo Domingo",
    "Villa Angeles",
    "Wakas",
    "Wawa"
],
"Pilar": [
    "Ala-uli",
    "Bagumbayan",
    "Balut",
    "Balut II",
    "Bantan Munti",
    "Burgos",
    "Del Rosario (Pob.)",
    "Diwa",
    "Landing",
    "Liyang",
    "Nagwaling",
    "Panilao",
    "Pantingan",
    "Poblacion",
    "Rizal (Pob.)",
    "Santa Rosa",
    "Wakas North",
    "Wakas South",
    "Wawa"
],
"Samal": [
    "East Calaguiman (Poblacion)",
    "East Daang Bago (Poblacion)",
    "Gugo",
    "Ibaba (Poblacion)",
    "Imelda",
    "Lalawigan",
    "Palili",
    "San Juan (Poblacion)",
    "San Roque (Poblacion)",
    "Santa Lucia",
    "Sapa",
    "Tabing Ilog",
    "West Calaguiman (Poblacion)",
    "West Daang Bago"
],
    // Add more cities and their corresponding barangays here
};

            // Clear previous options
            barangaySelect.innerHTML = "";

            // Add the default option
            var defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "Select Barangay";
            barangaySelect.appendChild(defaultOption);

            // Add the barangays for the selected city
            var cityBarangays = barangays[selectedCity];
            if (cityBarangays) {
                for (var i = 0; i < cityBarangays.length; i++) {
                    var barangay = cityBarangays[i];
                    var option = document.createElement("option");
                    option.value = barangay;
                    option.text = barangay;
                    barangaySelect.appendChild(option);
                }
            }
        }
    </script>
</head>
<body>


<h1 style="margin-bottom: 50px; color: #32CD32; text-align: center; text-shadow: 4px 4px 4px black; font-weight: 800; font-size: 80px;">B2B  Driving <span style="color:#D70040;">School</span></h1>

<center>
    <div class="container">
        <table border="0">
            <tr>
                <td colspan="2">
                    <p class="header-text">Let's Get Started</p>
                    <p class="sub-text">Add Your Personal Details to Continue</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" >
                    <td class="label-td" colspan="2">
                        <label for="name" class="form-label">Name: </label>
                    </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for=gender class="form-label">Gender: </label>
                </td>
            </tr>
            <tr>
            <td class="label-td" colspan="2">
<select name="gender" class="input-text" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
    </select>
                </td>  
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="address" class="form-label">Address: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <select name="city" id="city" class="input-text" onchange="updateBarangays()" required>
                        <option value=""disabled selected>Select City</option>
                        <?php
                        foreach ($cities as $city) {
                            echo "<option value='$city'>$city</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td class="label-td" colspan="2">
                    <select name="barangay" id="barangay" class="input-text" required>
                    <option value="" disabled selected>Select Barangay</option>
                    <option value="" disabled>--- Please select a city first ---</option>
                 </select>
                </td>  
            </tr>
            <tr>
        </tr>
        <tr>
            <td class="label-td" colspan="2">
                <input type="text" name="street" class="input-text" placeholder="Street Name, building, House No." required>
            </td>
        </tr>
                    <tr>
            <td class="label-td" colspan="2">
                <label for="dob" class="form-label">Date of Birth: </label>
            </td>
                </tr>
                <tr>
            <td class="label-td" colspan="2">
                <input type="date" name="dob" id="dob" class="input-text" required>
            </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="Next" class="login-btn btn-primary btn">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>
                </form>
            </tr>
        </table>
    </div>
</center>
</body>
</html>