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
    <?php
        include "header.php";
    ?>
    

    <fieldset>
        <legend>Create an New Account</legend>

        <form method="post" action="insert.php">
        Name : <br>
        <input type="text" name="name" placeholder="Your full name" required><br><br>

        Email : <br>
        <input type="email" name="email" placeholder="Your email" required><br><br>

        Password : <br>
        <input type="password" name="password" placeholder="Your password" required><br><br>

        Confirm Password :<br>
        <input type="password" name="confirm_password" placeholder="Confirm your password" required><br><br>

        <input type="submit" value="Sign Up">
    </form>

    </fieldset>

    <?php
        include "footer.php";
    ?>
</body>
</html>

