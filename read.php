<?php
// Include config file for database connection
require 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted login data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if email and password fields are filled
    if (!empty($email) && !empty($password)) {
        // Prepare SQL query to check user credentials
        $query = "SELECT * FROM user_login WHERE email = '$email' AND password = '$password'";
        $result = $con->query($query);
        
        // Check if user exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['password'];
            $user_type = $row['user_type'];

            // Verify the password
            if ($password == $stored_password) {
                // Set session variables based on user type
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_type'] = $row['user_type'];

                // Redirect based on user type
                if ($user_type == 'customer') {
                    header("Location: home.php"); // Customer's dashboard
                } else if ($user_type == 'driver') {
                    header("Location: home.php"); // Driver's dashboard
                }
                exit();
            } else {
                // Invalid password
                header("Location: login.php?error=Invalid email or password.");
                exit();
            }
        } else {
            // Invalid email
            header("Location: login.php?error=Invalid email or password.");
            exit();
        }
    } else {
        // Fields are empty
        header("Location: login_form.php?error=Please enter both email and password.");
        exit();
    }
}

// Close database connection
mysqli_close($con);
?>
