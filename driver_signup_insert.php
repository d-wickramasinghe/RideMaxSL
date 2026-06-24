<?php
require 'config.php';

$driver_fname = $_POST["fname"];
$driver_lname = $_POST["lname"];
$driver_licence = $_POST["licence"];
$driver_email = $_POST["email"];
$driver_address = $_POST["address"];
$driver_nic = $_POST["nic"];
$driver_contact = $_POST["contact"];
$driver_uname = $_POST["uname"];
$driver_password = $_POST["password"];

if (empty($driver_fname) || empty($driver_lname) || empty($driver_email) || empty($driver_uname) || empty($driver_password)) {
    echo "Required fields are empty.";
    exit();
}

$con->begin_transaction();

try {
    $stmt1 = $con->prepare("INSERT INTO driver (first_name, last_name, licence_No, email, address, nic, phone_number, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("sssssssss", $driver_fname, $driver_lname, $driver_licence, $driver_email, $driver_address, $driver_nic, $driver_contact, $driver_uname, $driver_password);
    $stmt1->execute();
    $stmt1->close();

    $stmt2 = $con->prepare("INSERT INTO user_login (email, password, user_type) VALUES (?, ?, 'driver')");
    $stmt2->bind_param("ss", $driver_email, $driver_password);
    $stmt2->execute();
    $stmt2->close();

    $con->commit();
    header("Location: login.php");
    exit();
} catch (Exception $e) {
    $con->rollback();
    echo "Registration failed: " . htmlspecialchars($e->getMessage());
}

$con->close();
?>