<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require 'config.php';
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') { header('Location: login.php'); exit(); }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: dis_drivers.php'); exit(); }

$id = isset($_POST['driver_id']) ? (int)$_POST['driver_id'] : 0;
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$licence = $_POST['licence'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$nic = $_POST['nic'] ?? '';
$contact = $_POST['contact'] ?? '';
$uname = $_POST['uname'] ?? '';
$password = $_POST['password'] ?? '';

if ($id <= 0 || empty($fname) || empty($lname) || empty($email) || empty($uname)) { header('Location: dis_drivers.php'); exit(); }

// Begin transaction: update driver table and user_login if email/password changed
$con->begin_transaction();
try {
    $stmt = $con->prepare('UPDATE driver SET first_name=?, last_name=?, licence_No=?, email=?, address=?, nic=?, phone_number=?, username=? WHERE driver_id=?');
    $stmt->bind_param('ssssssssi', $fname, $lname, $licence, $email, $address, $nic, $contact, $uname, $id);
    $stmt->execute();
    $stmt->close();

    // update user_login email and password if present
    if (!empty($password)) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt2 = $con->prepare('UPDATE user_login SET email=?, password=? WHERE email=(SELECT email FROM driver WHERE driver_id=?)');
        $stmt2->bind_param('ssi', $email, $hashed, $id);
        $stmt2->execute();
        $stmt2->close();
    } else {
        // if only email changed, update email in user_login
        $stmt3 = $con->prepare('UPDATE user_login SET email=? WHERE email=(SELECT email FROM driver WHERE driver_id=?)');
        $stmt3->bind_param('si', $email, $id);
        $stmt3->execute();
        $stmt3->close();
    }

    $con->commit();
    header('Location: dis_drivers.php'); exit();
} catch (Exception $e) {
    $con->rollback();
    echo 'Update failed: '.htmlspecialchars($e->getMessage());
}

?>
