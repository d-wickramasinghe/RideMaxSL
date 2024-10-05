<?php
session_start();
require 'config.php';

if (!isset($_SESSION['email'])) {
    echo "Please log in.";
    exit();
}

// Check if the edit button was pressed
if (isset($_POST['editbtn'])) {
    // Extract the data from POST
    $customer_id = $_POST['id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];
    // Password should be handled securely; consider hashing it

    // Update the customer information in the database
    $sql = "UPDATE customer SET first_name=?, last_name=?, email=?, address=?, nic=? WHERE customer_id=?";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        echo "Error preparing statement: " . $con->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param("sssssi", $first_name, $last_name, $email, $address, $nic, $customer_id);

    // Execute the statement and check for errors
    if (!$stmt->execute()) {
        echo "Error executing query: " . $stmt->error;
        exit();
    }

    // Update phone number
    $sql2 = "UPDATE c_phonenumber SET phone_number=? WHERE customer_id=?";
    $stmt2 = $con->prepare($sql2);
    if (!$stmt2) {
        echo "Error preparing statement: " . $con->error;
        exit();
    }

    // Bind parameters for phone number update
    $stmt2->bind_param("si", $phone_number, $customer_id);
    
    // Execute and check for errors
    if (!$stmt2->execute()) {
        echo "Error executing query: " . $stmt2->error;
        exit();
    }

    // Close statements
    $stmt->close();
    $stmt2->close();

    // Redirect back to the profile page after successful update
    header("Location: cus_edit.php");
    exit();
}
?>
