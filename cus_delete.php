<?php
include 'config.php'; // Include database connection file

// Handle Delete
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $sql = "DELETE FROM customer WHERE customer_id='$customer_id'";

    if ($con->query($sql) === TRUE) {
        echo "Customer deleted successfully";
        header("Location: main.php");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    header("Location: cus_userprofile.php");
    exit(); // Ensure no further code is executed after the redirect
}
?>
