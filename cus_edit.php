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

<?php include "header.php"; ?>

<div class="main_div">
    <h1>Edit Profile</h1>
    <form method="post" action="cus_edit_update.php">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars($row['first_name']); ?>" required><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars($row['last_name']); ?>" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($row['address']); ?>" required><br>

        <label for="nic">NIC:</label><br>
        <input type="text" id="nic" name="nic" value="<?php echo htmlspecialchars($row['nic']); ?>" required><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="tel" id="phone_number" name="phone_number" value="<?php echo htmlspecialchars($row2['phone_number']); ?>" required><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required><br>

        <button type="submit" name="editbtn">Update</button>
    </form>
</div>

<?php include "footer.php"; ?>

</body>
</html>
