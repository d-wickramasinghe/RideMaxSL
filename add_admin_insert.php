<?php

require 'config.php';

$adminName = $_POST["name"];
$adminEmail = $_POST["email"];
$adminUsername = $_POST["username"];
$adminPassword = $_POST["password"];

if (empty($adminName) || empty($adminEmail) || empty($adminUsername) || empty($adminPassword)) {
    echo "All fields are required.";
    exit();
}

$hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

$checkAdmin = $con->prepare("SELECT admin_id FROM admin WHERE email = ?");
$checkAdmin->bind_param("s", $adminEmail);
$checkAdmin->execute();
$adminExists = $checkAdmin->get_result()->num_rows > 0;
$checkAdmin->close();

$checkLogin = $con->prepare("SELECT user_id FROM user_login WHERE email = ?");
$checkLogin->bind_param("s", $adminEmail);
$checkLogin->execute();
$loginExists = $checkLogin->get_result()->num_rows > 0;
$checkLogin->close();

if ($adminExists || $loginExists) {
    echo "Admin email already exists.";
    exit();
}

$con->begin_transaction();

$stmt = $con->prepare("INSERT INTO admin (name, email, username, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $adminName, $adminEmail, $adminUsername, $hashedPassword);

if ($stmt->execute()) {
    $stmt2 = $con->prepare("INSERT INTO user_login (email, password, user_type) VALUES (?, ?, 'admin')");
    $stmt2->bind_param("ss", $adminEmail, $hashedPassword);

    if ($stmt2->execute()) {
        $con->commit();
        header("Location: login.php?success=Admin%20Registered%20Successfully");
        exit();
    }

    $con->rollback();
    echo "Error inserting to user login!";
    $stmt2->close();
} else {
    $con->rollback();
    echo "Error inserting into admin: " . $stmt->error;
}

$stmt->close();
$con->close();
?>