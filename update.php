<?php
    require 'config.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $nic = $_POST['nic'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    if(empty($fname)||empty($lname)||empty($email)||empty($address)||empty($contact)||empty($nic)||empty($uname)||empty($password))
    {
        <script>
        onclick="return confirm('Are you sure you want to delete your account?')";
        </script>
    }
    else{
        $sql = "UPDATE customer c, c_phonenumber p
            set c.first_Name='$fname',
            c.last_name='$lname',
            c.email='$email',
            c.address='$address',
            p.contact='$contact',
            c.username='$uname',
            c.password='$password',
            c.nic='$nic' 
            WHERE c.customer_id=p.customer_id and username='$uname'" ;
    }


?>