<?php
session_start(); // Start session to track if the user is logged in
?>

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
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="userprofile.php"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <br>
            <?php
            // Check if the user is logged in
            if (isset($_SESSION['user_id'])) {
                // If logged in, show 'Log Out' button
                echo '<a href="logout.php" class="logoutbtn">Log out</a>';
            } else {
                // If not logged in, show 'Log In' button
                echo '<a href="login.php" class="loginbtn">Log in</a>';
            }
            ?>
        </div>
    </nav>
</body>
</html>
