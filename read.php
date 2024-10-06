<?php
require 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM user_login WHERE email = '$email' AND password = '$password'";
        $result = $con->query($query);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['password'];
            $user_type = $row['user_type'];

            if ($password == $stored_password) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_type'] = $row['user_type'];

                if ($user_type == 'customer') {
                    header("Location: home.php"); // Customer's dashboard
                } else if ($user_type == 'driver') {
                    header("Location: home.php"); // Driver's dashboard
                }
                exit();
            } else {
                header("Location: login.php?error=Invalid email or password.");
                exit();
            }
        } else {
            header("Location: login.php?error=Invalid email or password.");
            exit();
        }
    } else {
        header("Location: login_form.php?error=Please enter both email and password.");
        exit();
    }
}

mysqli_close($con);
?>
