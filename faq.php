<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';

// Auto-create table if not exists
$create_table = "CREATE TABLE IF NOT EXISTS faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$con->query($create_table);

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'read') {
        $sql = "SELECT * FROM faqs ORDER BY id DESC";
        $result = $con->query($sql);
        $faqs = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $faqs[] = $row;
            }
        }
        header('Content-Type: application/json');
        echo json_encode($faqs);
        exit();

    } elseif ($action == 'create') {
        $question = $_POST['question'];

        $sql = "INSERT INTO faqs (question) VALUES (?)";
        $new = $con->prepare($sql);
        $new->bind_param("s", $question);
        $new->execute();
        echo "Question added successfully";
        exit();

    } elseif ($action == 'update') {
        $id = $_POST['id'];
        $question = $_POST['question'];

        $sql = "UPDATE faqs SET question = ? WHERE id = ?";
        $new = $con->prepare($sql);
        $new->bind_param("si", $question, $id);
        $new->execute();
        echo "Question updated successfully";
        exit();

    } elseif ($action == 'delete') {
        $id = $_POST['id'];

        $sql = "DELETE FROM faqs WHERE id = ?";
        $new = $con->prepare($sql);
        $new->bind_param("i", $id);
        $new->execute();
        echo "Question deleted successfully";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - FAQ</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/faq.css'>
    <script src='js/faq.js'></script>
</head>
<body class="body">
    <?php include "header.php"; ?>
    
    <section id="faq">
        <div class="faq-item">
            <h3 class="faq-question">
                <span class="toggle-icon">+</span> HOW CAN I MAKE A RESERVATION ?
            </h3>
            <div class="faq-answer">
                <p>You can fill our reservation form and send us, we will reply you back. For more details you can call or contact us via WhatsApp using our hotline number +94 71 278 9323.</p>
            </div>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">
                <span class="toggle-icon">+</span> WHAT DOCUMENTS ARE REQUIRED TO RENT A VEHICLE ?
            </h3>
            <div class="faq-answer">
                <p>For Sri Lankan Citizens National Identity card/ Passport and a valid Sri Lankan Driving License. For Foreign Citizens Passport and International Driving License or the Driving License issued by their own country subject to endorsement by Automobile Association of Ceylon or Sri Lanka Motor Department.</p>
            </div>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">
                <span class="toggle-icon">+</span> ARE THERE ANY MILEAGE RESTRICTIONS ?
            </h3>
            <div class="faq-answer">
                <p>The mileage policy varies depending on the rental package. Please contact us for more specific details.</p>
            </div>
        </div>
    </section>

    <div class="faq-container">
        <h2>Frequently Asked Questions / Complaints</h2>
        <form id="faqForm">
            <input type="hidden" id="faqId">
            <label for="question">Your Question or Complaint:</label>
            <textarea id="question" rows="4" required></textarea>
            <button type="button" onclick="submitFAQ()" class="submitbtn">Submit</button>
        </form>
        
        <div id="faqList">
            <!-- Questions will be listed here -->
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
