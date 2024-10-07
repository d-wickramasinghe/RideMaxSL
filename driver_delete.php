<?php
session_start();
require 'config.php';

if(isset($_POST['deletebtn']) && isset($_SESSION['dri_id'])){
    $driver_id = $_SESSION['dri_id'];
}

$sql = "SELECT email FROM driver WHERE driver_id = '$driver_id'";
$result = $con->query($sql);

if($result->num_rows>0){
    $row = $result->fetch_assoc();
    $driver_email = $row['email'];

    $sql1 = "DELETE FROM driver WHERE driver_id = '$driver_id'";
    $sql2 = "DELETE FROM user_login WHERE email = '$driver_email'";

    if($con->query($sql1)===TRUE && $con->query($sql2)===TRUE){
        session_destroy();
        header("Location: login.php");
        exit();
    }
}

?>