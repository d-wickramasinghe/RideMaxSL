<?php
session_start();
require 'config.php';

if (isset($_POST['deletebtn']) ) {
    
    $customer_id = $_POST['deleteid'];
    $email = $_POST['deleteid'];

    $sql1 = "DELETE FROM customer WHERE email='$customer_id'";
    $sql2 = "DELETE FROM user_login WHERE email='$email'";

    if ($con->query($sql1) === TRUE && $con->query($sql2) === TRUE) {
        // echo "Customer deleted successfully";
        // echo "<scipt> window.location.href='./main.php'; </script>";
        // exit(); 

        header("Location: main.php");
        exit();
    } else {
        error_log("Error deleting records: " . $con->error); 
        echo "Error: " . $con->error; 
    }
} else {
    header("Location: cus_userprofile.php");
    exit(); 
}
?>
