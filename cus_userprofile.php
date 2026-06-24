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

        $stmt = $con->prepare("SELECT first_name, last_name, username, email, address, nic, c_phone FROM customer WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<div class="div_1">
                <fieldset class="display">
                <h1>Name: ' . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . '</h1>
                <h2>Username: ' . htmlspecialchars($row['username']) . '</h2>
                <h2>Email: ' . htmlspecialchars($row['email']) . '</h2>
                <h2>Address: ' . htmlspecialchars($row['address']) . '</h2>
                <h2>NIC: ' . htmlspecialchars($row['nic']) . '</h2>
                <h2>Phone No: ' . htmlspecialchars($row['c_phone']) . '</h2>

                <form method="post" action="cus_edit.php">
                    <button type="submit" class="editbtn" name="editbtn">Edit</button>
                </form>
                
                <!-- Delete Form -->
                <form method="post" action="cus_delete.php" onsubmit="return confirm(\'Are you sure you want to delete your profile? This action cannot be undone.\');">
                    <input name="deleteid" type="hidden" value="'. htmlspecialchars($row['email']) .'">
                    <button type="submit" class="editbtn" name="deletebtn">Delete</button>
                </form>

                </fieldset>
                </div>';
            } else {
                echo "<p style='color: red; text-align: center;'>No customer data found.</p>";
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
