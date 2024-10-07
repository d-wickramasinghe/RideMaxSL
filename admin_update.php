<?php
require 'config.php';

if (isset($_GET['admin_id'])) {
    $id = $_GET['admin_id'];

    $sql = "SELECT * FROM admin WHERE admin_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $username = $row['username'];
        $password = $row['password'];
    } else {
        echo "No admin record found!";
        exit();
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Update Admin</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <script src='myScript.js'></script>
</head>
<body>

    <h2>Edit Admin Details</h2>

    <form action="admin_update_insert.php" method="POST">
        <input type="hidden" name="admin_id" value="<?php echo $id; ?>">

        Admin Name: <br>
        <input type="text" name="admin_name" value="<?php echo $name; ?>" required><br><br>

        Email: <br>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>

        Username: <br>
        <input type="text" name="username" value="<?php echo $username; ?>" required><br><br>

        Password: <br>
        <input type="password" name="password" value="<?php echo $password; ?>" required><br><br>

        <input type="submit" value="Update">
    </form>

</body>
</html>
