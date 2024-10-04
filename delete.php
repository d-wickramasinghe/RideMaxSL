<?php
    require 'config.php';
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['customer_id'])) {
        header("Location: login.php"); // Redirect to login if not logged in
        exit();
    }

    $customer_id = $_SESSION['customer_id'];
    $error = "";

    // Fetch current user details
    $sql = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $customer = $result->fetch_assoc();
    } else {
        $error = "User not found.";
    }

    // Handle update form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $nic = $_POST['nic'];
        $uname = $_POST['uname'];
        $password = $_POST['password'];

        // Update user details
        $sql_update = "UPDATE customer 
                       SET fname = '$fname', lname = '$lname', email = '$email', address = '$address', 
                           nic = '$nic', uname = '$uname', password = '$password' 
                       WHERE customer_id = '$customer_id'";

        if ($con->query($sql_update)) {
            $success = "Profile updated successfully!";
        } else {
            $error = "Error updating profile: " . $con->error;
        }
    }

    // Handle delete account
    if (isset($_POST['delete'])) {
        $sql_delete = "DELETE FROM customer WHERE customer_id = '$customer_id'";
        if ($con->query($sql_delete)) {
            // Log the user out and redirect to the signup page
            session_destroy();
            header("Location: signup.php");
            exit();
        } else {
            $error = "Error deleting account: " . $con->error;
        }
    }

    $con->close();
?>