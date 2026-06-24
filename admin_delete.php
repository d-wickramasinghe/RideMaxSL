<?php
require_once 'config.php';

if (isset($_GET['delete_id'])) {
    $deleteID = $_GET['delete_id'];

  
    $stmt = $con->prepare("DELETE FROM admin WHERE admin_id = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($con->error));
    }

 
    $stmt->bind_param("i", $deleteID);


    if ($stmt->execute()) {
        echo "<script>alert('Admin Account Deleted');</script>";
        echo "<script>window.location.href='dis_admin.php';</script>";
    } else {
        echo "Account deletion failed: " . $con->error;
    }

  
    $stmt->close();
} else {
    echo "Delete ID parameter not found.";
}


$con->close();
?>
