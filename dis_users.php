<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - User List</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/admin.css'>
    <link rel='stylesheet' type='text/css' href='styles/display.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">

    <!-- Include header -->
    <?php include 'header.php'; ?>

    <div class="container">
        <h1 align="center">User Data Display</h1>
        <table class="admin-table" align="center" border="1">
            <thead>
                <tr>
                    <th>Customer ID</th>   
                    <th>First Name</th>  
                    <th>Last Name</th> 
                    <th>Customer Email</th>   
                    <th>Customer address</th>   
                    <th>NIC</th>   
                    <th>Phone Number</th> 
                    <th>Customer Username</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT customer_id, first_name, last_name, email, address, nic, c_phone, username FROM customer";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["customer_id"] . "</td>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["nic"] . "</td>";
                    echo "<td>" . $row["c_phone"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    
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
