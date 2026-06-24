<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require 'config.php';
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
    header('Location: login.php'); exit();
}

$id = isset($_GET['driver_id']) ? (int)$_GET['driver_id'] : 0;
if ($id <= 0) { header('Location: dis_drivers.php'); exit(); }

$stmt = $con->prepare('SELECT driver_id, first_name, last_name, licence_No, email, address, nic, phone_number, username FROM driver WHERE driver_id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$res = $stmt->get_result();
if (!$res || $res->num_rows === 0) { $stmt->close(); header('Location: dis_drivers.php'); exit(); }
$row = $res->fetch_assoc(); $stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <title>Edit Driver</title>
    <link rel='stylesheet' href='styles/main.css'>
    <link rel='stylesheet' href='styles/d_signup.css'>
</head>
<body>
<?php include 'header.php'; ?>
<div style='max-width:800px;margin:40px auto;background:#fff;padding:20px;border-radius:8px'>
    <h2>Edit Driver</h2>
    <form method='post' action='admin_driver_update.php'>
        <input type='hidden' name='driver_id' value='<?php echo (int)$row['driver_id']; ?>'>
        First name:<br><input type='text' name='fname' value='<?php echo htmlspecialchars($row['first_name']); ?>' required><br>
        Last name:<br><input type='text' name='lname' value='<?php echo htmlspecialchars($row['last_name']); ?>' required><br>
        Licence No:<br><input type='text' name='licence' value='<?php echo htmlspecialchars($row['licence_No']); ?>'><br>
        Email:<br><input type='email' name='email' value='<?php echo htmlspecialchars($row['email']); ?>' required><br>
        Address:<br><input type='text' name='address' value='<?php echo htmlspecialchars($row['address']); ?>'><br>
        NIC:<br><input type='text' name='nic' value='<?php echo htmlspecialchars($row['nic']); ?>'><br>
        Phone:<br><input type='text' name='contact' value='<?php echo htmlspecialchars($row['phone_number']); ?>'><br>
        Username:<br><input type='text' name='uname' value='<?php echo htmlspecialchars($row['username']); ?>' required><br>
        New Password (leave blank to keep):<br><input type='password' name='password'><br><br>
        <input type='submit' value='Update' class='btn1'>
        <a href='dis_drivers.php' class='btn1' style='background:#ccc;color:#000;padding:8px 12px;border-radius:6px;text-decoration:none'>Cancel</a>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
