<?php
session_start();
require 'config.php';

// Check if the user is logged in
            //$c_id = $_SESSION['customer_id'];


        // Fetch the data from the form
        $c_id=$_POST['c_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $phone_number = $_POST['phone_number'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $query1 = "UPDATE customer SET first_name='$fname', last_name='$lname', email='$email', address='$address', nic='$nic', username='$username', password='$password' , c_phone='$phone_number' WHERE customer_id='$c_id'";

            // Execute both queries
            if ($con->query($query1) === TRUE) {
                // Redirect to profile page after successful update
                header("Location: cus_userprofile.php");
                exit();
            } else {
                echo "Error updating record: " . $con->error;
            }

        
    
 
?>
