<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-SignUp</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/signup.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">
    <nav class="navbar">
        <img src="images/logo/ride max sl (1).png" alt="logo" class="profile-photo">

        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="main.php">Home</a></li>
                <li><a href="#">Vehicles</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="#"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <a href="login.php" class="loginbtn">Log In</a>
            <a href="registeras.php" class="loginbtn">Sign Up</a>
        </div>
    </nav>
    <!--end of the header-->
    

    <fieldset>
        <legend>Create an New Account</legend>

        <form method="post" action="driver_signup_insert.php">

            

        First Name : <br>
        <input type="text" class="input" name="fname" placeholder="Your First name" required><br><br>

            Last Name : <br>
            <input type="text" class="input" name="lname" placeholder="Your Last name" required><br><br>

            Licence No : <br>
            <input type="text" class="input" name="licence" placeholder="Your License Number" required><br><br>

        Email : <br>
        <input type="email" class="input" name="email" placeholder="Your email" required><br><br>

        Address : <br>
        <input type="text" class="input" name="address" placeholder="Your address" required><br><br>

        Phone Number : <br>
        <input type="text" class="input" name="contact" placeholder="Your phone number" required><br><br>

        NIC : <br>
        <input type="number" class="input" name="nic" placeholder="NIC number" required><br><br>

        Username : <br>
        <input type="text" class="input" name="uname" placeholder="enter the user name" required><br><br>

        Password : <br>
        <input type="password" class="input" name="password" placeholder="Your password" required><br><br>

        <input type="submit" class="btn" value="Sign Up" href="home.php">
    </form>

    </fieldset>

    <?php
        include "footer.php";
    ?>
</body>
</html>

