<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted login data
    $c_email = $_POST["email"];
    $c_password = $_POST["password"];

    // Check if username and password are filled
    if (!empty($c_email) && !empty($c_password)) {
        // Prepare SQL query to get user by username using prepared statements
        $stmt = $con->prepare("SELECT * FROM customer WHERE email = ?");
        $stmt->bind_param("s", $c_email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows > 0) {
            // Fetch the user data
            $row = $result->fetch_assoc();
            $stored_password = $row["password"]; // Assuming the password is stored in the "password" column

            // Verify password (consider using password_verify() for hashed passwords)
            if (password_verify($c_password, $stored_password)) {
                // Set session or cookies as needed (optional)
                session_start();
                $_SESSION['user_id'] = $row['id']; // Example: Storing user ID in the session
                $_SESSION['email'] = $row['email']; // Example: Storing email in the session

                // Redirect to home page after successful login
                header("Location: home.php");
                exit();
            } else {
                $error = "Invalid password. Please try again.";
            }
        } else {
            $error = "No user found with that username.";
        }
        $stmt->close();
    } else {
        $error = "Please enter both username and password.";
    }
}

$con->close();
?>