<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require 'config.php';
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') { header('Location: login.php'); exit(); }

$id = isset($_GET['delete_id']) ? (int)$_GET['delete_id'] : 0;
if ($id <= 0) { header('Location: dis_drivers.php'); exit(); }

// find email for user_login
$stmt = $con->prepare('SELECT email FROM driver WHERE driver_id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
if (!$res || $res->num_rows === 0) { $stmt->close(); header('Location: dis_drivers.php'); exit(); }
$row = $res->fetch_assoc(); $email = $row['email']; $stmt->close();

$con->begin_transaction();
try {
    $stmt1 = $con->prepare('DELETE FROM driver WHERE driver_id = ?');
    $stmt1->bind_param('i', $id); $stmt1->execute(); $stmt1->close();

    $stmt2 = $con->prepare('DELETE FROM user_login WHERE email = ?');
    $stmt2->bind_param('s', $email); $stmt2->execute(); $stmt2->close();

    $con->commit();
    header('Location: dis_drivers.php'); exit();
} catch (Exception $e) {
    $con->rollback();
    echo 'Delete failed: '.htmlspecialchars($e->getMessage());
}

?>
