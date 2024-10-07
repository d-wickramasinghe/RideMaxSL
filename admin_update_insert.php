<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["admin_id"];
    $name = $_POST["admin_name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($id) || empty($name) || empty($email) || empty($username) || empty($password)) {
        echo "All fields are required.";
        exit();
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare update statement
    $sql = "UPDATE admin SET name = ?, email = ?, username = ?, password = ? WHERE admin_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssi", $name, $email, $username, $hashed_password, $id);

    if ($stmt->execute()) {
        header("Location: dis_admin.php");
        exit();
    } else {
        echo "Error updating record: " . $con->error;
    }

    $stmt->close();
}

$con->close();
?>
