<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vehicle_rental';

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Insert a new reservation (CREATE)
if (isset($_POST['submit'])) {
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $vehicle_type = $_POST['vehicle_type'];

    $sql = "INSERT INTO reservations (pickup_location, return_location, pickup_date, return_date, vehicle_type) 
            VALUES ('$pickup_location', '$return_location', '$pickup_date', '$return_date', '$vehicle_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update reservation (UPDATE)
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $vehicle_type = $_POST['vehicle_type'];

    $sql = "UPDATE reservations SET 
            pickup_location='$pickup_location', 
            return_location='$return_location', 
            pickup_date='$pickup_date', 
            return_date='$return_date', 
            vehicle_type='$vehicle_type' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete a reservation (DELETE)
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM reservations WHERE id=$id");
    header('Location: vehicle_rental.php'); // Redirect back to form after deletion
}

// Fetch reservation for editing (READ - Single record)
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM reservations WHERE id=$id");
    if ($result->num_rows == 1) {
        $reservation = $result->fetch_assoc();
    }
}

// Close connection
$conn->close();
?>
