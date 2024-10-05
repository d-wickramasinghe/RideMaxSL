<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
</head>
<body>

<?php include "header.php"; 
require 'config.php';
session_start();

$id = $_SESSION['cus_id'];
$sql = "SELECT * FROM customer WHERE  customer_id = '$id'";

$result = $con->query($sql);
$row = $result->fetch_assoc();

?>

<div class="editdiv1">
    <h1>Edit Profile</h1>
    <form method="post" action="cus_edit_update.php">
        <input type="hidden" name="c_id" value="<?php echo ($row['customer_id']); ?>">

        <label for="fname" class="lbl">First Name:</label><br>
        <input type="text" class ="input" name="fname" value="<?php echo ($row['first_name']); ?>" required><br>

        <label for="lname" class="lbl">Last Name:</label><br>
        <input type="text" class ="input" name="lname" value="<?php echo ($row['last_name']); ?>" required><br>

        <label for="email" class="lbl">Email:</label><br>
        <input type="email" class ="input" name="email" value="<?php echo ($row['email']); ?>" required><br>

        <label for="address" class="lbl">Address:</label><br>
        <input type="text" class ="input" name="address" value="<?php echo ($row['address']); ?>" required><br>

        <label for="nic" class="lbl">NIC:</label><br>
        <input type="text" class ="input" name="nic" value="<?php echo ($row['nic']); ?>" required><br>

        <label for="phone_number" class="lbl">Phone Number:</label><br>
        <input type="tel" class ="input" name="phone_number" value="<?php echo ($row['c_phone']); ?>" required><br>

        <label for="username" class="lbl">Username:</label><br>
        <input type="text" class ="input" name="username" value="<?php echo ($row['username']); ?>" required><br>

        <label for="password" class="lbl">Password:</label><br>
        <input type="password" class ="input" name="password" value="<?php echo ($row['password']); ?>" required><br>

        <button type="submit" class="submitbtn" name="editbtn">Update</button>
    </form>
</div>

<?php include "footer.php"; ?>

</body>
</html>
