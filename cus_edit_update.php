<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (isset($_SESSION['customer_id'])) {
    $customer_id = $_SESSION['customer_id'];

    // If the form has been submitted (for updating)
    if (isset($_POST['editbtn'])) {
        // Fetch the data from the form
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $phone_number = $_POST['phone_number'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if all fields are filled
        if (!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($nic) && !empty($phone_number) && !empty($username) && !empty($password)) {
            // Update customer details
            $query1 = "UPDATE customer SET first_name='$fname', last_name='$lname', email='$email', address='$address', nic='$nic', username='$username', password='$password' WHERE customer_id='$customer_id'";
            $query2 = "UPDATE c_phonenumber SET phone_number='$phone_number' WHERE customer_id='$customer_id'";

            // Execute both queries
            if ($con->query($query1) === TRUE && $con->query($query2) === TRUE) {
                // Redirect to profile page after successful update
                header("Location: cus_userprofile.php");
                exit();
            } else {
                echo "Error updating record: " . $con->error;
            }
        } else {
            echo "Error: All fields must be filled in.";
        }
    }

    // Fetch the current data to display in the edit form
    $result = $con->query("SELECT * FROM customer WHERE customer_id = '$customer_id'");
    $result2 = $con->query("SELECT * FROM c_phonenumber WHERE customer_id = '$customer_id'");

    if ($result && $result->num_rows > 0 && $result2 && $result2->num_rows > 0) {
        // Fetch the data
        $row = $result->fetch_assoc();
        $row2 = $result2->fetch_assoc();
    } else {
        echo "Error fetching customer details.";
    }
} else {
    echo "Please log in.";
    exit();
}
?>
