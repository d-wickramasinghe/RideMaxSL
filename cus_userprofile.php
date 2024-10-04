<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/crud.css'>

</head>
<body>
<?php include "header.php"; ?>

<div class="profile">
    <h2>Your Profile</h2>
    <p><h1>Hi!</h1></p>
    
    <!-- Display current profile data -->
    <form method="post" action="cus_update.php" class="Uform">
        <label>First Name:</label>
        <input type="text" name="fname" value="<?php echo $customer['fname']; ?>" required><br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo $customer['lname']; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $customer['email']; ?>" required><br>

        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $customer['address']; ?>" required><br>

        <label>Phone Number:</label>
        <input type="text" name="contact" value="<?php echo $customer['phone_number']; ?>" required><br>

        <label>NIC:</label>
        <input type="text" name="nic" value="<?php echo $customer['nic']; ?>" required><br>

        <label>Username:</label>
        <input type="text" name="uname" value="<?php echo $customer['uname']; ?>" required><br>

        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $customer['password']; ?>" required><br>

        <button type="submit" name="update">Update Profile</button>
        <button type="submit" name="delete" class="delete-btn" onclick="return confirm('Are you sure you want to delete your account?');">Delete Account</button>
    </form>
</div>

<?php include "footer.php"; ?>
</body>
</html>