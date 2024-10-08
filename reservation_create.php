<?php

include 'config.php'; 

$sql = "SELECT * FROM reservation";  
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


    $sql = "INSERT INTO reservation (name, email, vehicle_type, no_of_passengers, phone_number, pickup_date, return_date) 
        VALUES ('$name', '$email', '$vehicle_type', '$no_of_passengers', '$phone_number', '$pickup_date', '$return_date')";

if ($con->query($sql) === TRUE) {
    header("Location: reservationread.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
    <link rel="stylesheet" type="text/css" href="styles/reservation.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>
    
    <br>
    <center><h1 class="title">Create Reservation</h1></center>
    <form class="revform" method="POST" action="">
        <center><label class="formlable">Name:</label><br>
        <input class="forminput" type="text" name="name" required><br><br>

        <label class="formlable">Email:</label><br>
        <input class="forminput" type="email" name="email" required><br><br>

        <label class="formlable" name="vehicle_type">Vehicle Type:</label><br>
        <select class="forminput" name="vehicle_type" required>
            <option value="SUV" >SUV</option>
            <option value="Vans and busses">Vans and busses</option>
            <option value="motorbikes">motorbikes</option>
            <option value="cars">cars</option>
        </select><br><br>
        <label class="formlable">Number of Passengers:</label><br>
        <input class="forminput" type="number" name="no_of_passengers" required><br><br>

        <label class="formlable">Phone Number:</label><br>
        <input class="forminput" type="text" name="phone_number" required><br><br>

        <label class="formlable">Pickup Date:</label><br>
        <input class="forminput" type="date" name="pickup_date" required><br><br>

        <label class="formlable">Return Date:</label><br>
        <input class="forminput" type="date" name="return_date" required><br><br>

        <input class="submitbtn" type="submit" name="create" value="Add Reservation"><br>
        <a class="viewbtn" href="reservationread.php">Confirm</a>
    </form></center>

    <?php include 'footer.php'; ?>

</body>
</html>
