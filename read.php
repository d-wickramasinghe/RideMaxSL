<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)) {
        $stmt = $con->prepare("SELECT user_id, email, password, user_type FROM user_login WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $stored_password = $row['password'];
                $user_type = $row['user_type'];

                if (password_verify($password, $stored_password) || $password === $stored_password) {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['user_type'] = $row['user_type'];

                    if ($user_type === 'admin') {
                        header("Location: admin.php");
                    } else {
                        header("Location: home.php");
                    }
                    exit();
                }
            }
            $stmt->close();
            header("Location: login.php?error=Invalid email or password.");
            exit();
        } else {
            header("Location: login.php?error=Database query failed.");
            exit();
        }
    } else {
        header("Location: login.php?error=Please enter both email and password.");
        exit();
    }
}
?>
