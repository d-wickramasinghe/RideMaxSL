<?php

$dbHost = getenv('DB_HOST') ?: '127.0.0.1';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASS') ?: '';
$dbName = getenv('DB_NAME') ?: 'ridemax_sl';
$dbPort = (int) (getenv('DB_PORT') ?: 3306);
$dbSocket = getenv('DB_SOCKET') ?: null;

// Prevent uncaught mysqli exceptions so we can provide a clearer error message.
mysqli_report(MYSQLI_REPORT_OFF);

$con = @new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort, $dbSocket);

if ($con->connect_errno && $dbHost === 'localhost') {
    // On macOS, localhost often tries a Unix socket; retry with TCP.
    $con = @new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName, $dbPort, $dbSocket);
}

if ($con->connect_errno) {
    die('Database connection failed (' . $con->connect_errno . '): ' . $con->connect_error);
}

$con->set_charset('utf8mb4');
?>
