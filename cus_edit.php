<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (isset($_SESSION['id'])) {
    $customer_id = $_SESSION['id'];

    // If the form has been submitted (for updating)
    if (isset($_POST['editbtn'])) {
        // Fetch the data from the form
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $phone_number = $_POST['phone_number'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if all fields are filled
        if (!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($nic) && !empty($phone_number) && !empty($username) && !empty($password)) {
            // Update customer details
            $query1 = "UPDATE customer SET first_name='$fname', last_name='$lname', email='$email', address='$address', nic='$nic', username='$username', password='$password' WHERE customer_id='$customer_id'";
            $query2 = "UPDATE c_phonenumber SET phone_number='$phone_number' WHERE customer_id='$customer_id'";

            // Execute both queries
            if ($con->query($query1) === TRUE && $con->query($query2) === TRUE) {
                // Redirect to profile page after successful update
                header("Location: cus_userprofile.php");
                exit();
            } else {
                echo "Error updating record: " . $con->error;
            }
        } else {
            echo "Error: All fields must be filled in.";
        }
    }

    // Fetch the current data to display in the edit form
    $result = $con->query("SELECT * FROM customer WHERE customer_id = '$customer_id'");
    $result2 = $con->query("SELECT * FROM c_phonenumber WHERE customer_id = '$customer_id'");

    if ($result && $result->num_rows > 0 && $result2 && $result2->num_rows > 0) {
        // Fetch the data
        $row = $result->fetch_assoc();
        $row2 = $result2->fetch_assoc();
    } else {
        echo "Error fetching customer details.";
    }
} else {
    echo "Please log in.";
    exit();
}
?>

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
    <form method="post" action="cus_userprofile.php">
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
