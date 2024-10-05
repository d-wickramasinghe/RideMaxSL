<?php
session_start();
require 'config.php';

if (isset($_POST['deletebtn'])) {
    // Get the customer ID from the hidden form field
    $customer_id = $_POST['id'];

    // Start a transaction to ensure all queries are executed together
    $con->begin_transaction();

    try {
        // Fetch the email associated with the customer before deletion
        $result = $con->query("SELECT email FROM customer WHERE customer_id = $customer_id");

        if ($result && $result->num_rows > 0) {
            $user_row = $result->fetch_assoc();
            $email = $user_row['email']; // Get the email for deletion

            // Delete the phone number record from the c_phonenumber table
            $con->query("DELETE FROM c_phonenumber WHERE customer_id = $customer_id");

            // Delete the customer record from the customer table
            $con->query("DELETE FROM customer WHERE customer_id = $customer_id");

            // Delete the user record from the user_login table using the email
            $con->query("DELETE FROM user_login WHERE email = '$email'");

            // If all deletes were successful, commit the transaction
            $con->commit();

            // Destroy the session and redirect to the homepage
            session_destroy();
            header("Location: main.php");
            exit();
        } else {
            throw new Exception("User not found.");
        }
    } catch (mysqli_sql_exception $exception) {
        // If there was an error, roll back the transaction
        $con->rollback();
        echo "Error deleting record: " . $exception->getMessage();
    } catch (Exception $e) {
        // Handle any other exceptions
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Unauthorized access.";
}
?>
