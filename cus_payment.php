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
    <?php
        include "header.php";
    ?>
    <!--end of the header-->
    

    <fieldset>
        <h2>Create an New Account</h2>

        <form method="post" action="cus_signup_insert.php">

        First Name : <br>
        <input type="text" class="input" name="fname" placeholder="Your First name" required><br><br>

        Last Name : <br>
        <input type="text" class="input" name="lname" placeholder="Your Last name" required><br><br>

        Email : <br>
        <input type="email" class="input" name="email" placeholder="Your email" required><br><br>

        Address : <br>
        <input type="text" class="input" name="address" placeholder="Your address" required><br><br>

        Phone Number : <br>
        <input type="text" class="input" name="contact" placeholder="Your phone number" required><br><br>

        NIC : <br>
        <input type="text" class="input" name="nic" placeholder="NIC number" required><br><br>

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

