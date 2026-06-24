<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Profile</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/d_userprofile.css'>
</head>
<body>
    <?php include "header.php"; ?>

    <div class="main_div">
        <?php
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];

            $stmt = $con->prepare("SELECT driver_id, first_name, last_name, username, licence_No, email, address, nic, phone_number FROM driver WHERE email = ?");
            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $_SESSION['dri_id'] = $row['driver_id'];

                    echo '<div class="div_1">
                    <fieldset class="display">
                    
                    <h1>Driver Profile</h1>
                    <table class="profile_table">
                        <tr><td>Name:</td><td>' . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . '</td></tr>
                        <tr><td>Driver ID:</td><td>' . htmlspecialchars($row['driver_id']) . '</td></tr>
                        <tr><td>Username:</td><td>' . htmlspecialchars($row['username']) . '</td></tr>
                        <tr><td>License No:</td><td>' . htmlspecialchars($row['licence_No']) . '</td></tr>
                        <tr><td>Email:</td><td>' . htmlspecialchars($row['email']) . '</td></tr>
                        <tr><td>Address:</td><td>' . htmlspecialchars($row['address']) . '</td></tr>
                        <tr><td>NIC:</td><td>' . htmlspecialchars($row['nic']) . '</td></tr>
                        <tr><td>Phone No:</td><td>' . htmlspecialchars($row['phone_number']) . '</td></tr>
                    </table>

                    <form action="driver_edit.php" method="post">
                        <button type="submit" class="btn" name="editbtn">Edit</button>    
                    </form>

                    <form action="driver_delete.php" method="post">
                        <button type="submit" class="dltbtn" name="deletebtn" onclick="return confirm(\'Are you sure you want to delete your account? This action cannot be undone.\');">Delete</button>   
                    </form>

                    </fieldset>
                    </div>';
                } else {
                    echo "<p style='color: red; text-align: center;'>No driver data found.</p>";
                }
                $stmt->close();
            } else {
                echo "<p style='color: red; text-align: center;'>Database query error.</p>";
            }
        } else {
            echo "<p style='color: red; text-align: center;'>Please <a href='login.php'>log in</a> to view your profile.</p>";
        }
        ?>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>