<?php
// Use shared DB connection from config.php
require_once 'config.php';

$result = $con->query("SELECT * FROM reservations");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['pickup_location']}</td>
        <td>{$row['return_location']}</td>
        <td>{$row['pickup_date']}</td>
        <td>{$row['return_date']}</td>
        <td>{$row['vehicle_type']}</td>
        <td>
            <a href='process.php?delete={$row['id']}'>Delete</a>
        </td>
    </tr>";
    }
} else {
    echo "<!-- Query failed: " . htmlspecialchars($con->error) . " -->";
}
?>
<head>
<link rel="stylesheet" href="reservation.css">
</head>