<?php
    require 'config.php';

    // Capture the form data
    $cusfname = $_POST["fname"];
    $cuslname = $_POST["lname"];
    $c_email = $_POST["email"];
    $c_address = $_POST["address"];
    $c_contact = $_POST["contact"];
    $c_nic = $_POST["nic"];
    $c_uname = $_POST["uname"];
    $c_password = $_POST["password"];

    // Insert into customer table
// Assume the correct column names in your customer table
        $sql1 = "INSERT INTO customer (first_name, last_name, email, address, nic, username, password) 
         VALUES ('$cusfname', '$cuslname', '$c_email', '$c_address', '$c_nic', '$c_uname', '$c_password')";

    if ($con->query($sql1)) {
        // Get the last inserted customer ID
        $last_customer_id = $con->insert_id;

        // Insert into c_phonenumber table using the last inserted customer_id
        $sql2 = "INSERT INTO c_phonenumber (customer_id, phone_number) 
                 VALUES ('$last_customer_id', '$c_contact')";

        // Execute the second query
        if ($con->query($sql2)) {
            header("Location: home.php");
            exit();
        } else {
            echo "Error inserting into c_phonenumber: " . $con->error;
        }
    } else {
        echo "Error inserting into customer: " . $con->error;
    }

    // Close the connection
    $con->close();
?>
