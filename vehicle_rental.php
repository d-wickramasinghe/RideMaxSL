<?php
// Fetch all reservations and display them
$conn = new mysqli('localhost', 'root', '', 'vehicle_rental');
$result = $conn->query("SELECT * FROM reservations");

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

$conn->close();
?>
<head>
<link rel="stylesheet" href="reservation.css">
</head>