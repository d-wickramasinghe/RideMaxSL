<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Admin List</title>

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
            max-width: 1200px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
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
        }

        .admin-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .admin-table tbody tr:hover {
            background-color: rgba(255, 204, 0, 0.3);
            transition: all 0.3s ease-in-out;
        }

        /* Button Styles */
        .update-btn, .delete-btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin: 5px;
            transition: all 0.3s ease-in-out;
        }

        .update-btn {
            background-color: #4CAF50; /* Green */
            color: #fff;
        }

        .delete-btn {
            background-color: #e74c3c; /* Red */
            color: #fff;
        }

        .update-btn:hover {
            background-color: #45a049;
        }

        .delete-btn:hover {
            background-color: #c0392b;
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

            .update-btn, .delete-btn {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body style="background-image: url('newbg.jpg');">

    <!-- Include header -->
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Admin Data Display</h1>
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
                    echo "<td data-label='Admin ID'>" . $row["admin_id"] . "</td>";
                    echo "<td data-label='Admin Name'>" . $row["name"] . "</td>";
                    echo "<td data-label='Admin Email'>" . $row["email"] . "</td>";
                    echo "<td data-label='Admin Username'>" . $row["username"] . "</td>";
                    echo "<td data-label='Admin Password'>" . $row["password"] . "</td>";
                    echo "<td data-label='Actions'>
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
