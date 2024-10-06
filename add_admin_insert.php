<?php

require 'config.php';

$adminID=$_POST["admin_id"];
$adminName=$_POST["name"];
$adminEmail=$_POST["email"];
$adminUsername=$_POST["username"];
$adminPassword=$_POST["password"];

$sql="INSERT INTO admin VALUES ('$adminID','$adminName','$adminEmail','$adminUsername','adminPassword')";

    if($con->query($sql))
    {
      header("Location: admin.php"); exit();
    }

    else{
        echo "Error".$con->error;
    }

    $con->close();
?>