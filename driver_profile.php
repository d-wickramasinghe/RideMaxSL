<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/d_userprofile.css'>
</head>

<body>

    <?php include "header.php"; ?>

    <div class="main_div">
        <?php
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $login = "SELECT * FROM driver WHERE email = '$email'";
            $login_result = $con->query($login);

            if ($login_result && $login_result->num_rows > 0) {
                $login_row = $login_result->fetch_assoc();
                $email = $login_row['email'];

                $sql = "SELECT * FROM driver WHERE email = '$email'";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $id = $row['driver_id'];
                    $_SESSION['dri_id'] = $id;

                    echo '<div class="div_1">
                    <fieldset class="display">
                    
                    <h1>Driver Profile</h1>
                    <table class="profile_table">
                        <tr><td>Name:</td><td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td></tr>
                        <tr><td>Driver ID:</td><td>' . $row['driver_id'] . '</td></tr>
                        <tr><td>Username:</td><td>' . $row['username'] . '</td></tr>
                        <tr><td>License No:</td><td>' . $row['licence_No'] . '</td></tr>
                        <tr><td>Email:</td><td>' . $row['email'] . '</td></tr>
                        <tr><td>Address:</td><td>' . $row['address'] . '</td></tr>
                        <tr><td>NIC:</td><td>' . $row['nic'] . '</td></tr>
                        <tr><td>Phone No:</td><td>' . $row['phone_number'] . '</td></tr>
                    </table>

                    <form action="driver_edit.php" method="post">
                        <button type="submit" class="btn" name="editbtn">Edit</button>    
                    </form>

                    <form action="driver_delete.php" method="post">
                        <button type="submit" class="dltbtn" name="deletebtn" onclick="return confirm(\'Are you sure you want to delete your account?\');">Delete</button>   
                    </form>

                    </fieldset>
                    </div>';
                } else {
                    echo "No customer data found for email: $email.";
                }
            } else {
                echo "No user login data found.";
            }
        } else {
            echo "Please log in.";
        }
        ?>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>