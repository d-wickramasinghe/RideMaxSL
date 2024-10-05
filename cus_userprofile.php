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

        $login_query = "SELECT * FROM user_login WHERE email = '$email'";
        $login_result = $con->query($login_query);
        
        if ($login_result && $login_result->num_rows > 0) {
            $login_row = $login_result->fetch_assoc();
            $email = $login_row['email'];

            $sql = "SELECT * FROM customer WHERE email = '$email'";

            $result = $con->query($sql);
    

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $id = $row['customer_id'];
                $_SESSION['cus_id'] = $id;
                // Display user data
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
                <?form>
                

                <!-- Delete Form -->
                <form method="post" action="cus_delete.php">
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
