<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vehicle_rental';

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Handle form submission (CREATE)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $vehicle_type = $_POST['vehicle_type'];

    $sql = "INSERT INTO reservations (pickup_location, return_location, pickup_date, return_date, vehicle_type)
            VALUES ('$pickup_location', '$return_location', '$pickup_date', '$return_date', '$vehicle_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully created!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM reservations WHERE id=$id");
    header('Location: vehicle_rental.php');
}

// Handle EDIT
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $record = $conn->query("SELECT * FROM reservations WHERE id=$id")->fetch_assoc();

    // Prefill form with the reservation data for editing
    echo "<script>
        document.querySelector('input[name=pickup_location]').value = '{$record['pickup_location']}';
        document.querySelector('input[name=return_location]').value = '{$record['return_location']}';
        document.querySelector('input[name=pickup_date]').value = '{$record['pickup_date']}';
        document.querySelector('input[name=return_date]').value = '{$record['return_date']}';
        document.querySelector('select[name=vehicle_type]').value = '{$record['vehicle_type']}';
    </script>";
}

// Handle UPDATE (submit changes)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $vehicle_type = $_POST['vehicle_type'];

    $sql = "UPDATE reservations SET pickup_location='$pickup_location', return_location='$return_location',
            pickup_date='$pickup_date', return_date='$return_date', vehicle_type='$vehicle_type' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully updated!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
