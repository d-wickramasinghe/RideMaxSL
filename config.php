<?php

$con = new mqli("localhost" , "root" , "" , "ridemax_sl");

if($con->connect_error){
    die($con->connect_error);
}

?>
