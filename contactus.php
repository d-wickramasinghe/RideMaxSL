<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';

$message_sent = false;
$error_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['conbutton'])) {
    $cname = $_POST['cname'];
    $cmail = $_POST['cmail'];
    $cmessage = $_POST['cmessage'];
    
    // Ensure table exists
    $create_table = "CREATE TABLE IF NOT EXISTS contact_messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $con->query($create_table);
    
    $stmt = $con->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $cname, $cmail, $cmessage);
        if ($stmt->execute()) {
            $message_sent = true;
        } else {
            $error_msg = "Error sending message: " . $con->error;
        }
        $stmt->close();
    } else {
        $error_msg = "Database prepared statement failed.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Contact Us</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/contactusstyles.css">
    <script src='js/contacusscripts.js'></script>
</head>
<body class="body">
    
    <?php include "header.php"; ?>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Get in touch if your question has not been answered</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p><br>123 ABS road <br> ABC <br>ABC</p><br>
                        <hr style="width: 60%; border: 1px solid;">
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p><br>077-1234567</p><br>
                        <hr style="width: 60%; border: 1px solid;">
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p><br>support@ridemaxsl.com</p><br>
                        <hr style="width: 60%; border: 1px solid;">
                    </div>
                </div>
            </div>
            
            <div class="contactform">
                <?php if ($message_sent): ?>
                    <div class="success-message" style="color: green; font-weight: bold; margin-bottom: 20px; text-align: center;">
                        Thank you! Your message has been sent successfully.
                    </div>
                <?php elseif (!empty($error_msg)): ?>
                    <div class="error-message" style="color: red; font-weight: bold; margin-bottom: 20px; text-align: center;">
                        <?php echo htmlspecialchars($error_msg); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="contactus.php">
                    <h2>SEND MESSAGES</h2>
                    <div class="inputbox">
                        <label>Full name</label>
                        <input type="text" name="cname" placeholder="Enter full name" autocomplete="off" required><br><br>
                        <label>Email</label>
                        <input type="email" name="cmail" placeholder="Enter Email" autocomplete="off" required><br><br>
                        <label>Message</label>
                        <input type="text" name="cmessage" placeholder="Enter Your message" autocomplete="off" required><br><br>                
                        <input type="submit" name="conbutton" value="send" id="conbutton">   
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </section>  

    <?php include "footer.php"; ?>
</body>
</html>




