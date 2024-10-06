<?php
require 'config.php';

$driver_id = $_POST["id"];
$driver_fname = $_POST["fname"];
$driver_lname= $_POST["lname"];
$driver_licence= $_POST["licence"];
$driver_email= $_POST["email"];
$driver_address= $_POST["address"];
$driver_nic= $_POST["nic"];
$driver_contact= $_POST["contact"];
$driver_uname= $_POST["uname"];

if(empty($driver_id)||empty($driver_fname)||empty($driver_lname)||empty($driver_licence)||empty($driver_email)||empty($driver_address)||empty($driver_nic)||empty($driver_contact)||empty($driver_uname))
{
    echo "All Required";
}

else
{
    $sql="UPDATE driver set first_name='$driver_fname',last_name='$driver_lname',licence_No='$driver_licence', email='$driver_email',address='$driver_address',nic='$driver_nic',phone_number='$driver_contact',username='$driver_uname' WHERE driver_id='$driver_id'";

    if($con->query($sql))
    {
        header("Location: driver_profile.php");
    }

    else
    {
        echo"not updated";
    }
    

}


?>