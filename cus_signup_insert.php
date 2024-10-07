<?php
require 'config.php';

$cusfname = $_POST["fname"];
$cuslname = $_POST["lname"];
$c_email = $_POST["email"];
$c_address = $_POST["address"];
$c_contact = $_POST["contact"];
$c_nic = $_POST["nic"];
$c_uname = $_POST["uname"];
$c_password = $_POST["password"];

$sql1 = "INSERT INTO customer (first_name, last_name, email, address, username, password, nic, c_phone) 
         VALUES ('$cusfname', '$cuslname', '$c_email', '$c_address', '$c_uname', '$c_password', '$c_nic', '$c_contact')";

if ($con->query($sql1) === TRUE) {
    $last_customer_id = $con->insert_id;

    $sql3 = "INSERT INTO user_login (email, password, user_type) 
                 VALUES ('$c_email', '$c_password', 'customer')";

 
        if ($con->query($sql3) === TRUE) {
            header("Location: main.php");
            exit();
        } else {
            echo "Error inserting into user_login: " . $con->error;
        }
   
} else {
    echo "Error inserting into customer: " . $con->error;
}

$con->close();
?>