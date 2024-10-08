<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Admin List</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/admin.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">

    <!-- Include header -->
    <?php include 'header.php'; ?>

    <div class="container">
        <h1 align="center">Admin Data Display</h1>
        <table class="admin-table" align="center" border="1">
            <thead>
                <tr>
                    <th>Admin ID</th>   
                    <th>Admin Name</th>   
                    <th>Admin Email</th>   
                    <th>Admin Username</th>   
                    <th>Admin Password</th>   
                    <th>Actions</th> 
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT admin_id, name, email, username, password FROM admin";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["admin_id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>
                            <a href='admin_update.php?admin_id=" . $row["admin_id"] . "'><button class='update-btn'>Update</button></a>
                            <a href='admin_delete.php?delete_id=" . $row["admin_id"] . "' onclick='return confirm(\"Are you sure?\")'><button class='delete-btn'>Delete</button></a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found.</td></tr>";
            }

            $con->close();
            ?>
            
            </tbody>
        </table>
    </div>

    <!-- Include footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
