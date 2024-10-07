<?php
require_once ' ./config.php';

if(isset($_GET['delete_id'])){
$deleteID = $_GET['delete_id'];

$sql = "DELETE FROM admin WHERE admin_id ='$deleteID";
if($conn->query(sql)===TRUE){
    echo "<script>alert('User Account Deleted');</script>";
    echo"<script>window.location.href='admin_insert.php';</script>";
    
}else{
    echo "Account deleted Failed :";
}<?php
require_once 'config.php';

if (isset($_GET['delete_id'])) {
    $deleteID = $_GET['delete_id'];

    // Secure the delete query using prepared statement to avoid SQL injection
    $stmt = $con->prepare("DELETE FROM admin WHERE admin_id = ?");
    $stmt->bind_param("i", $deleteID);

    if ($stmt->execute()) {
        echo "<script>alert('Admin Account Deleted');</script>";
        echo "<script>window.location.href='dis_admin.php';</script>";
    } else {
        echo "Account deletion failed: " . $con->error;
    }

    $stmt->close();
} else {
    echo "Delete ID parameter not found.";
}

$con->close();
?>

}else{
    echo "delete id parameter not found";
}
$conn->close();

?>