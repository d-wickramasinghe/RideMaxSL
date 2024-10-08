<?php
require 'config.php';

$action = $_GET['action'];

if ($action == 'read') {
    $sql = "SELECT * FROM faqs";
    $result = $conn->query($sql);
    $faqs = [];

    while ($row = $result->fetch_assoc()) {
        $faqs[] = $row;
    }

    echo json_encode($faqs);

} elseif ($action == 'create') {
    $question = $_POST['question'];

    $sql = "INSERT INTO faqs (question) VALUES (?)";
    $new = $conn->prepare($sql);
    $new->bind_param("s", $question);
    $new->execute();
    echo "Question added successfully";

} elseif ($action == 'update') {
    $id = $_POST['id'];
    $question = $_POST['question'];

    $sql = "UPDATE faqs SET question = ? WHERE id = ?";
    $new = $conn->prepare($sql);
    $new->bind_param("si", $question, $id);
    $new->execute();
    echo "Question updated successfully";

} elseif ($action == 'delete') {
    $id = $_POST['id'];

    $sql = "DELETE FROM faqs WHERE id = ?";
    $new = $conn->prepare($sql);
    $new->bind_param("i", $id);
    $new->execute();
    echo "Question deleted successfully";
}

$conn->close();
?>
