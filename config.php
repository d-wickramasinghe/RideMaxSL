<?php

$con = new mysqli("localhost" , "root" , "" , "ridemax_sl");

if($con->connect_error){
    die($con->connect_error);
}

?>
