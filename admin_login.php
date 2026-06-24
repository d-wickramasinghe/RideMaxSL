<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["user_id"])) {
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
        header("Location: admin.php");
    } else {
        header("Location: home.php");
    }
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Admin Login</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/login.css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src='js/myScript.js'></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="body" style="background-image: url('newbg.jpg');">

    <?php include "header.php"; ?>

    <div class="div1login">
        <h2>Admin Login</h2>

        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error-message' style='color: red; text-align: center;'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>

        <form method="post" action="read.php" class="transparent">
            <label for="email">Admin Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <div class="g-recaptcha" data-sitekey="6LcIxlkqAAAAAKoVFvDvKHwwrMz_xJa75uMWV8lh"></div>

            <button type="submit" class="loginbtn">Login as Admin</button>
        </form>

    </div>

    <?php include "footer.php"; ?>
</body>
</html>
