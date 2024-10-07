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
    <link rel='stylesheet' type='text/css' href='styles/userprofile.css'>
</head>

<body>

    <?php
    include "header.php";
    ?>

    <div class="main_div">
        <?php

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];

            $login = "SELECT * FROM driver WHERE email = '$email'";
            $login_result = $con->query($login);

            if ($login_result && $login_result->num_rows > 0) {
                $login_row = $login_result->fetch_assoc();
                $email = $login_row['email'];


                $sql =  "SELECT * FROM driver WHERE email = '$email'";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    $id=$row['driver_id'];
                    $_SESSION['dri_id'] = $id;

                    echo '<div class="div_1">
                    <fieldset class="display">
                    
                    <h1>Name: ' . $row['first_name'] . ' ' . $row['last_name'] . '</h1>
                    <h2>Driver ID: ' . $row['driver_id'].'</h2>
                    <h2>User name: ' . $row['username'] . '</h2>
                    <h2>License No: ' . $row['licence_No'] . '</h2>
                    <h2>Email: ' . $row['email'] . '</h2>
                    <h2>Address: ' . $row['address'] . '</h2>
                    <h2>NIC: ' . $row['nic'] . '</h2>
                    <h2>Phone No: ' . $row['phone_number'] . '</h2>

                    <form action="driver_edit.php" method="post">
        <button type="submit" class="editbtn" name="editbtn">Edit</button>    
    </form>

    <form action="driver_delete.php" method="post">
        <button type="submit" class="editbtn" name="deletebtn" onclick="return confirm(\'Are you sure you want to delete your account?\');">Delete</button>   
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
                    
                