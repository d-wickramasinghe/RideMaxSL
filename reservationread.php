<?php
include 'config.php'; 

$sql = "SELECT * FROM reservation"; 
$reservation = $con->query($sql);

if (!$reservation) {
    die("Query failed: " . $con->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
    <link rel="stylesheet" type="text/css" href="styles/reservation.css">
</head>
<body>

    <?php include 'header.php'; ?>
    <br>

    <center><h1 class="heading">Reservation List</h1></center>

    <center><table class="table" border="1">
        <tr class="tablerow">
            <th class="theading">ID</th>
            <th class="theading">Name</th>
            <th class="theading">Email</th>
            <th class="theading">Vehicle Type</th>
            <th class="theading">No of Passengers</th>
            <th class="theading">Phone No</th>
            <th class="theading">Return Date</th>
            <th class="theading">Pickup Date</th>
            <th class="theading">Actions</th>
        </tr></center>

        <?php while ($row = $reservation->fetch_assoc()) { ?>
            <tr class="tablerow">
                <td class="tdata"><?php echo $row['ID']; ?></td>
                <td class="tdata"><?php echo $row['name']; ?></td>
                <td class="tdata"><?php echo $row['email']; ?></td>
                <td class="tdata"><?php echo $row['vehicle_type']; ?></td>
                <td class="tdata"><?php echo $row['no_of_passengers']; ?></td>
                <td class="tdata"><?php echo $row['phone_number']; ?></td>
                <td class="tdata"><?php echo $row['return_date']; ?></td>
                <td class="tdata"><?php echo $row['pickup_date']; ?></td>
                <td class="tdata">
                    <button class = "upbtn"><a class="actionbtn1" href="reservationUpdate.php?id=<?php echo $row['ID']; ?>">Update</a></button>
                    <button class = "delbtn"><a class="actionbtn2" href="reservation_delete.php?id=<?php echo $row['ID']; ?>">Delete</a></button>
</td>
            </tr>
        <?php } ?>
    </table><br>

    <button class = "addbtn"><a class="createbtn" href="home.php">Add Reservation</a></button>

    <?php include 'footer.php'; ?>
</body>
</html>
