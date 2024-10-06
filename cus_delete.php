<?php
include 'config.php'; // Include database connection file

// Handle Delete
if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];
    $sql = "DELETE FROM customer WHERE customer_id='$customer_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Discount deleted successfully";
        header("Location: main.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: cus_userprofile.php");
}
?>
