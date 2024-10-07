<?php
include 'config.php';
if (isset($_POST['update'])) {
    $reservationId = $_POST['reservationId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $vehicleType = $_POST['vehicleType'];
    $noOfPassengers = $_POST['noOfPassengers'];
    $phoneNumber = $_POST['phoneNumber'];
    $returnDate = $_POST['returnDate'];
    $pickupDate = $_POST['pickupDate'];

    $sql = "UPDATE reservation SET name='$name', 
        email='$email', 
        vehicle_type='$vehicleType', 
        no_of_passengers='$noOfPassengers', 
        phone_number='$phoneNumber',    
        return_date='$returnDate', 
        pickup_date='$pickupDate' 
        WHERE ID ='$reservationId'";

    if ($con->query($sql) === TRUE) {
        echo "Reservation updated successfully";
        echo "<script>window.location.href = ./reservationread.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
    $result = $con->query("SELECT * FROM reservation WHERE ID ='$reservationId'");
    $reservation = $result->fetch_assoc();
} else {
    header("Location: reservationread.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
    <link rel="stylesheet" type="text/css" href="styles/reservation.css">
</head>
<body>

    <?php
        include 'header.php';

    ?>
    <br>

    <fieldset class="fields">
    <center><h1 class="title">Update Reservation</h1>
    <form class="revform" method="POST" action="#"> 

    <input class="forminput" type="hidden" name="reservationId" value="<?php echo $reservation['ID']; ?>"><br><br>

    <label class="revlable">Name:</label><br>
    <input class="forminput" type="text" name="name" value="<?php echo $reservation['name']; ?>" required><br><br>
        
    <label class="revlable">Email:</label><br>
    <input class="forminput" type="email" name="email" value="<?php echo $reservation['email']; ?>" required><br><br>

    <label class="revlable">Vehicle Type:</label><br>
    <input class="forminput" type="text" name="vehicleType" value="<?php echo $reservation['vehicle_type']; ?>" required><br><br>

    <label class="revlable">Number of Passengers:</label><br>
    <input class="forminput" type="number" name="noOfPassengers" value="<?php echo $reservation['no_of_passengers']; ?>" required><br><br>

    <label class="revlable">Phone Number:</label><br>
    <input class="forminput" type="text" name="phoneNumber" value="<?php echo $reservation['phone_number']; ?>" required><br><br>

    <label class="revlable">Return Date:</label><br>
    <input class="forminput" type="date" name="returnDate" value="<?php echo $reservation['return_date']; ?>" required><br><br>

    <label class="revlable">Pickup Date:</label><br>
    <input class="forminput" type="date" name="pickupDate" value="<?php echo $reservation['pickup_date']; ?>" required><br><br>

    <input class="submitbtn" type="submit" name="update" value="Update Reservation">
    </form>
    <a class="viewbtn" href="reservationread.php">Back to Reservations</a></center></fieldset>

    <?php
        include 'footer.php';

    ?>
</body>
</html>
