<?php
session_start();
require 'config.php';

if (!isset($_SESSION['email'])) {
    echo "Please log in.";
    exit();
}

// Check if the edit button was pressed
if (isset($_POST['editbtn'])) {
    $customer_id = $_POST['id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];

    $sql = "UPDATE customer SET first_name=?, last_name=?, email=?, address=?, nic=? WHERE customer_id=?";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        echo "Error preparing statement: " . $con->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param("sssssi", $first_name, $last_name, $email, $address, $nic, $customer_id);

    if (!$stmt->execute()) {
        echo "Error executing query: " . $stmt->error;
        exit();
    }

    $sql2 = "UPDATE c_phonenumber SET phone_number=? WHERE customer_id=?";
    $stmt2 = $con->prepare($sql2);
    if (!$stmt2) {
        echo "Error preparing statement: " . $con->error;
        exit();
    }

    $stmt2->bind_param("si", $phone_number, $customer_id);
    
    if (!$stmt2->execute()) {
        echo "Error executing query: " . $stmt2->error;
        exit();
    }

    $stmt->close();
    $stmt2->close();

    header("Location: cus_edit.php");
    exit();
}
?>
