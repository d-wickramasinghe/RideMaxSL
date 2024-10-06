<?php
include 'config.php'; // Include the database connection file

// Fetch reservation data
$sql = "SELECT * FROM reservation"; // Make sure the table name is correct
$reservation = $con->query($sql);

if (!$reservation) {
    die("Query failed: " . $con->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
</head>
<body>

    <?php include 'header.php'; ?>
    <br>
    <h1 class="heading">Reservation List</h1>

    <table class="table" border="1">
        <tr class="tablerow">
            <th class="tablehead">ID</th>
            <th class="tablehead">Name</th>
            <th class="tablehead">Email</th>
            <th class="tablehead">Vehicle Type</th>
            <th class="tablehead">No of Passengers</th>
            <th class="tablehead">Phone No</th>
            <th class="tablehead">Return Date</th>
            <th class="tablehead">Pickup Date</th>
            <th class="tablehead">Actions</th>
        </tr>

        <?php while ($row = $reservation->fetch_assoc()) { ?>
            <tr class="tablerow">
                <td class="tabledata"><?php echo $row['reservation_id']; ?></td>
                <td class="tabledata"><?php echo $row['name']; ?></td>
                <td class="tabledata"><?php echo $row['email']; ?></td>
                <td class="tabledata"><?php echo $row['vehicle_type']; ?></td>
                <td class="tabledata"><?php echo $row['No_of_passengers']; ?></td>
                <td class="tabledata"><?php echo $row['Phone_number']; ?></td>
                <td class="tabledata"><?php echo $row['return_date']; ?></td>
                <td class="tabledata"><?php echo $row['pickup_date']; ?></td>
                <td class="tabledata">
                    <a class="actionbtn1" href="reservationUpdate.php?id=<?php echo $row['reservation_id']; ?>">Update</a>
                    <a class="actionbtn2" href="reservationDelete.php?id=<?php echo $row['reservation_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <a class="createbtn" href="car.php">Add Reservation</a>

    <?php include 'footer.php'; ?>
</body>
</html>
