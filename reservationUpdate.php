<?php
include 'config.php'; // Include database connection file

// Handle Update
if (isset($_POST['update'])) {
    $reservationId = $_POST['reservationId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $vehicleType = $_POST['vehicleType'];
    $noOfPassengers = $_POST['noOfPassengers'];
    $phoneNumber = $_POST['phoneNumber'];
    $returnDate = $_POST['returnDate'];
    $pickupDate = $_POST['pickupDate'];

    $sql = "UPDATE reservation SET name='$name', email='$email', vehicle_type='$vehicleType', 
            no_of_passengers='$noOfPassengers', phone_number='$phoneNumber', return_date='$returnDate', 
            pickup_date='$pickupDate' 
            WHERE reservation_id='$reservationId'";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation updated successfully";
        header("Location: reservationRead.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Get reservation data for editing
if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
    $result = $conn->query("SELECT * FROM reservation WHERE reservation_id='$reservationId'");
    $reservation = $result->fetch_assoc();
} else {
    header("Location: reservationRead.php");
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

    <h1 class="pagetitle70">Update Reservation</h1>
    <form class="emform" method="POST" action="">
        <input type="hidden" name="reservationId" value="<?php echo $reservation['reservation_id']; ?>">

        <label class="formlable">Name:</label><br>
        <input class="forminput" type="text" name="name" value="<?php echo $reservation['name']; ?>" required><br>
        
        <label class="formlable">Email:</label><br>
        <input class="forminput" type="email" name="email" value="<?php echo $reservation['email']; ?>" required><br>

        <label class="formlable">Vehicle Type:</label><br>
        <input class="forminput" type="text" name="vehicleType" value="<?php echo $reservation['vehicle_type']; ?>" required><br>

        <label class="formlable">Number of Passengers:</label><br>
        <input class="forminput" type="number" name="noOfPassengers" value="<?php echo $reservation['no_of_passengers']; ?>" required><br>

        <label class="formlable">Phone Number:</label><br>
        <input class="forminput" type="text" name="phoneNumber" value="<?php echo $reservation['phone_number']; ?>" required><br>

        <label class="formlable">Return Date:</label><br>
        <input class="forminput" type="date" name="returnDate" value="<?php echo $reservation['return_date']; ?>" required><br>

        <label class="formlable">Pickup Date:</label><br>
        <input class="forminput" type="date" name="pickupDate" value="<?php echo $reservation['pickup_date']; ?>" required><br>

        <input class="submitbtn" type="submit" name="update" value="Update Reservation">
    </form>
    <a class="viewbtn" href="reservationRead.php">Back to Reservations</a>

    <?php
        include 'footer.php';

    ?>
</body>
</html>
