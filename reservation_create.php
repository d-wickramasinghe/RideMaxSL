<?php
include 'config.php'; // Include the database connection file

// Fetch reservation data
$sql = "SELECT * FROM reservation"; // Make sure the table name is correct
$reservation = $con->query($sql);

if (!$reservation) {
    die("Query failed: " . $con->error);
}

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $vehicle_type = $_POST['vehicle_type'];
    $no_of_passengers = $_POST['no_of_passengers'];
    $phone_number = $_POST['phone_number'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];

    // Insert data into the reservations table
    $sql = "INSERT INTO reservation (reservation_id, name, email, vehicle_type, no_of_passengers, phone_number, pickup_date, return_date) 
            VALUES ('', '$name', '$email', '$vehicle_type', '$no_of_passengers', '$phone_number', '$pickup_date', '$return_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New reservation created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
</head>
<body>

    <?php
        include 'header.php';

    ?>
    <br>
    <h1 class="pagetitle70">Create Reservation</h1>

    <form class="emform" method="POST" action="">
        <label class="formlable">Name:</label><br>
        <input class="forminput" type="text" name="name" required><br>

        <label class="formlable">Email:</label><br>
        <input class="forminput" type="email" name="email" required><br>

        <label class="formlable">Vehicle Type:</label><br>
        <input class="forminput" type="text" name="vehicle_type" required><br>

        <label class="formlable">Number of Passengers:</label><br>
        <input class="forminput" type="number" name="no_of_passengers" required><br>

        <label class="formlable">Phone Number:</label><br>
        <input class="forminput" type="text" name="phone_number" required><br>

        <label class="formlable">Pickup Date:</label><br>
        <input class="forminput" type="date" name="pickup_date" required><br>

        <label class="formlable">Return Date:</label><br>
        <input class="forminput" type="date" name="return_date" required><br>

        <input class="submitbtn" type="submit" name="create" value="Add Reservation">
    </form>

    <a class="viewbtn" href="reservationread.php">Confirm</a>

    <?php
        include 'footer.php';

    ?>
</body>
</html>
