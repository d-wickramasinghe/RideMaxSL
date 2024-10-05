<?php

require 'config.php';


$driver_fname = $_POST["fname"];
$driver_lname= $_POST["lname"];
$driver_licence= $_POST["licence"];
$driver_email= $_POST["email"];
$driver_address= $_POST["address"];
$driver_nic= $_POST["nic"];
$driver_contact= $_POST["contact"];
$driver_uname= $_POST["uname"];
$driver_password= $_POST["password"];

$sql = "INSERT INTO driver VALUES('','$driver_fname','$driver_lname','$driver_licence','$driver_email','$driver_address','$driver_nic','$driver_contact','$driver_uname','$driver_password')";

if($con->query($sql)){
    echo "Insert Successfull";
}

else{
    echo "Error".$con->error;
}


$con->close();
?>