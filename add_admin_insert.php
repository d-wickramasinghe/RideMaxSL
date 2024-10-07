<?php

require 'config.php';


$adminName = $_POST["name"];
$adminEmail = $_POST["email"];
$adminUsername = $_POST["username"];
$adminPassword = $_POST["password"];

$sql = "INSERT INTO admin VALUES ('','$adminName','$adminEmail','$adminUsername','$adminPassword')";

if ($con->query($sql)) {
    $sql2 = "INSERT INTO user_login (email, password, user_type) 
                 VALUES ('$adminEmail', '$adminPassword', 'admin')";


    if ($con->query($sql2) === TRUE) {
        echo "<script>alert('Admin Registered Successfully!')</script>";
        header("Location: login.php");
    } else {
        echo "<script>alert('Error inserting to user login!')</script>";
    }


} else {
    echo "Error inserting into customer" . $con->error;
}


$con->close();
?>