<?php
include 'config.php'; // Include database connection file

// Handle Delete
if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
    $sql = "DELETE FROM reservation WHERE reservation_id='$reservationId'";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation deleted successfully";
        header("Location: reservationRead.php"); // Redirect to reservationRead.php after deletion
        exit(); // Exit to prevent further script execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Output error if deletion fails
    }
} else {
    header("Location: reservationRead.php"); // Redirect if no ID is set
    exit(); // Exit to prevent further script execution
}
?>
