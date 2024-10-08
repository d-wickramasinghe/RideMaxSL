<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vehicle_rental';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Create new reservation
if (isset($_POST['submit'])) {
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $pickup_time = $_POST['pickup_time'];
    $return_date = $_POST['return_date'];
    $return_time = $_POST['return_time'];
    $number_of_days = $_POST['number_of_days'];
    $vehicle_type = $_POST['vehicle_type'];
    $currency_type = 'Sri Lankan Rupee (LKR)';

    $sql = "INSERT INTO reservations (pickup_location, return_location, pickup_date, pickup_time, return_date, return_time, number_of_days, vehicle_type, currency_type)
            VALUES ('$pickup_location', '$return_location', '$pickup_date', '$pickup_time', '$return_date', '$return_time', '$number_of_days', '$vehicle_type', '$currency_type')";

    if ($conn->query($sql) === TRUE) {
        echo "New reservation created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete a reservation
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM reservations WHERE id=$id");
    header('location: vehicle_reservation.php');
}

// Update a reservation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $pickup_location = $_POST['pickup_location'];
    $return_location = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $pickup_time = $_POST['pickup_time'];
    $return_date = $_POST['return_date'];
    $return_time = $_POST['return_time'];
    $number_of_days = $_POST['number_of_days'];
    $vehicle_type = $_POST['vehicle_type'];

    $conn->query("UPDATE reservations SET pickup_location='$pickup_location', return_location='$return_location', pickup_date='$pickup_date', pickup_time='$pickup_time', return_date='$return_date', return_time='$return_time', number_of_days='$number_of_days', vehicle_type='$vehicle_type' WHERE id=$id");
    header('location: vehicle_reservation.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Reservation</title>
    <link rel="stylesheet" href="res.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

<h2>Vehicle Reservation Form</h2>

<form action="vehicle_reservation.php" method="POST">
    <label for="pickup_location">Pick Up Location</label>
    <input type="text" name="pickup_location" required>

    <label for="return_location">Return Location</label>
    <input type="text" name="return_location" required>

    <label for="pickup_date">Pick Up Date</label>
    <input type="date" name="pickup_date" required>

    <label for="pickup_time">Pick Up Time</label>
    <input type="time" name="pickup_time" required>

    <label for="return_date">Return Date</label>
    <input type="date" name="return_date" required>

    <label for="return_time">Return Time</label>
    <input type="time" name="return_time" required>

    <label for="number_of_days">Number of Days</label>
    <input type="number" name="number_of_days" required>

    <label for="vehicle_type">Vehicle Type</label>
    <select name="vehicle_type" required>
        <option value="Car">Car</option>
        <option value="SUV">SUV</option>
        <option value="Van">Vans & Buses</option>
        <option value="Motorbike">Motorbike</option>
    </select>

    <button type="submit" name="submit">Submit</button>
</form>

<h2>All Reservations</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Pickup Location</th>
        <th>Return Location</th>
        <th>Pickup Date</th>
        <th>Pickup Time</th>
        <th>Return Date</th>
        <th>Return Time</th>
        <th>Number of Days</th>
        <th>Vehicle Type</th>
        <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM reservations");
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['pickup_location']}</td>
            <td>{$row['return_location']}</td>
            <td>{$row['pickup_date']}</td>
            <td>{$row['pickup_time']}</td>
            <td>{$row['return_date']}</td>
            <td>{$row['return_time']}</td>
            <td>{$row['number_of_days']}</td>
            <td>{$row['vehicle_type']}</td>
            <td>
                <a href='vehicle_reservation.php?edit={$row['id']}'>Edit</a>
                <a href='vehicle_reservation.php?delete={$row['id']}'>Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>

<?php
// Edit form if edit button is clicked
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $record = $conn->query("SELECT * FROM reservations WHERE id=$id")->fetch_assoc();
    ?>

    <h2>Edit Reservation</h2>
    <form action="vehicle_reservation.php" method="POST">
        <input type="hidden" name="id" value="<?= $record['id']; ?>">
        <label for="pickup_location">Pick Up Location</label>
        <input type="text" name="pickup_location" value="<?= $record['pickup_location']; ?>" required>

        <label for="return_location">Return Location</label>
        <input type="text" name="return_location" value="<?= $record['return_location']; ?>" required>

        <label for="pickup_date">Pick Up Date</label>
        <input type="date" name="pickup_date" value="<?= $record['pickup_date']; ?>" required>

        <label for="pickup_time">Pick Up Time</label>
        <input type="time" name="pickup_time" value="<?= $record['pickup_time']; ?>" required>

        <label for="return_date">Return Date</label>
        <input type="date" name="return_date" value="<?= $record['return_date']; ?>" required>

        <label for="return_time">Return Time</label>
        <input type="time" name="return_time" value="<?= $record['return_time']; ?>" required>

        <label for="number_of_days">Number of Days</label>
        <input type="number" name="number_of_days" value="<?= $record['number_of_days']; ?>" required>

        <label for="vehicle_type">Vehicle Type</label>
        <select name="vehicle_type" required>
            <option value="<?= $record['vehicle_type']; ?>" selected><?= $record['vehicle_type']; ?></option>
            <option value="Car">Car</option>
            <option value="SUV">SUV</option>
            <option value="Van">Vans & Buses</option>
            <option value="Motorbike">Motorbike</option>
        </select>

        <button type="submit" name="update">Update</button>
    </form>
<?php } ?>

</body>
</html>
