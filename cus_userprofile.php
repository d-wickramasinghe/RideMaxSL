<?php
session_start();
require 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/userprofile.css'>
</head>
<body>
<?php include "header.php"; ?>

<div class="main_div">
    <?php
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];

        // Fetch customer details using the email from the session
        $sql = "SELECT * FROM customer WHERE email = '$email'";
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo '<div class="div_1">
            <fieldset class="display">
            <h1>Name: ' . $row['first_name'] . ' ' . $row['last_name'] . '</h1>
            <h2>User name: ' . $row['username'] . '</h2>
            <h2>Email: ' . $row['email'] . '</h2>
            <h2>Address: ' . $row['address'] . '</h2>
            <h2>NIC: ' . $row['nic'] . '</h2>
            <h2>Phone No: ' . $row['c_phone'] . '</h2>

            <form method="post" action="cus_edit.php">
                <button type="submit" class="editbtn" name="editbtn">Edit</button>
            </form>
            

            <!-- Delete Form -->
            <form method="post" action="cus_delete.php">
                <input name="deleteid" type="Hidden" value="'. $row['email'] .'">
                <button type="submit" class="editbtn" name="deletebtn">Delete</button>
            </form>

            </fieldset>
            </div>';
        } else {
            echo "No customer data found for email: $email.";
        }
    } else {
        echo "Please log in.";
    }
    ?>
</div>

<?php include "footer.php"; ?>
</body>
</html>
