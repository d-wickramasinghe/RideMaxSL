<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - User List</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('images/background.jpg'); /* Replace with actual background image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .container {
            max-width: 1300px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(5px);
        }

        h1 {
            text-align: center;
            font-size: 32px;
            color: #333;
            margin-bottom: 30px;
        }

        /* Table Styles */
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #ffcc00; /* Frame around the table */
        }

        .admin-table thead {
            background-color: #ffcc00;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
        }

        .admin-table th, .admin-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center; /* Center-aligning table data */
        }

        .admin-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .admin-table tbody tr:hover {
            background-color: rgba(255, 204, 0, 0.3);
            transition: all 0.3s ease-in-out;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .admin-table, .admin-table thead, .admin-table tbody, .admin-table th, .admin-table td, .admin-table tr {
                display: block;
                width: 100%;
            }

            .admin-table thead {
                display: none;
            }

            .admin-table tr {
                margin-bottom: 15px;
            }

            .admin-table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .admin-table td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                padding-left: 15px;
                font-weight: bold;
            }
        }
    </style>
</head>
<body style="background-image: url('newbg.jpg');">

    <!-- Include header -->
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>User Data Display</h1>
        <table class="admin-table" align="center">
            <thead>
                <tr>
                    <th>Customer ID</th>   
                    <th>First Name</th>  
                    <th>Last Name</th> 
                    <th>Customer Email</th>   
                    <th>Customer Address</th>   
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
                    echo "<td data-label='Customer ID'>" . $row["customer_id"] . "</td>";
                    echo "<td data-label='First Name'>" . $row["first_name"] . "</td>";
                    echo "<td data-label='Last Name'>" . $row["last_name"] . "</td>";
                    echo "<td data-label='Customer Email'>" . $row["email"] . "</td>";
                    echo "<td data-label='Customer Address'>" . $row["address"] . "</td>";
                    echo "<td data-label='NIC'>" . $row["nic"] . "</td>";
                    echo "<td data-label='Phone Number'>" . $row["c_phone"] . "</td>";
                    echo "<td data-label='Customer Username'>" . $row["username"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No records found.</td></tr>";
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
