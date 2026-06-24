<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';

if (isset($_POST['deletebtn']) && isset($_POST['deleteid'])) {
    $email = $_POST['deleteid'];

    $con->begin_transaction();

    try {
        $stmt1 = $con->prepare("DELETE FROM customer WHERE email = ?");
        $stmt1->bind_param("s", $email);
        $stmt1->execute();
        $stmt1->close();

        $stmt2 = $con->prepare("DELETE FROM user_login WHERE email = ?");
        $stmt2->bind_param("s", $email);
        $stmt2->execute();
        $stmt2->close();

        $con->commit();

        // Log out user since their account was deleted
        session_unset();
        session_destroy();

        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        $con->rollback();
        echo "Error deleting profile: " . htmlspecialchars($e->getMessage());
    }
} else {
    header("Location: cus_userprofile.php");
    exit();
}
?>
