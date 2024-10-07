<?php
include 'config.php';


if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
    $sql = "DELETE FROM reservation WHERE ID ='$reservationId'";

    if ($con->query($sql) === TRUE) {
        echo "Reservation deleted successfully";
        header("Location: reservationRead.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; 
    }
} else {
    header("Location: reservationRead.php");
    exit();
}
?>
