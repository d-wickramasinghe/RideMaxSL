
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">
    <nav class="navbar">
        <img src="images/logo/ride max sl (1).png" alt="logo" class="profile-photo">

        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="vehicle.php">Vehicles</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="reservationread.php">Reservation</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="cus_userprofile.php"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <br>
            <?php
            
                echo '<a href="main.php" class="logoutbtn" onclick="return confirm(\'Are you sure you want to delete your account?\')";>Log out</a>';
            ?>
        </div>
    </nav>
</body>
</html>
