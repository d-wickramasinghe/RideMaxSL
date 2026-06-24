<?php
require 'config.php';

$cusfname = $_POST["fname"];
$cuslname = $_POST["lname"];
$c_email = $_POST["email"];
$c_address = $_POST["address"];
$c_contact = $_POST["contact"];
$c_nic = $_POST["nic"];
$c_uname = $_POST["uname"];
$c_password = $_POST["password"];

if (empty($cusfname) || empty($cuslname) || empty($c_email) || empty($c_uname) || empty($c_password)) {
    echo "Required fields are empty.";
    exit();
}

// Start transaction to ensure atomicity
$con->begin_transaction();

try {
    $stmt1 = $con->prepare("INSERT INTO customer (first_name, last_name, email, address, username, password, nic, c_phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("ssssssss", $cusfname, $cuslname, $c_email, $c_address, $c_uname, $c_password, $c_nic, $c_contact);
    $stmt1->execute();
    $stmt1->close();

    $stmt2 = $con->prepare("INSERT INTO user_login (email, password, user_type) VALUES (?, ?, 'customer')");
    $stmt2->bind_param("ss", $c_email, $c_password);
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