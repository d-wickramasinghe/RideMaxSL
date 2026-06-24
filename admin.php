<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
 
    <link rel='stylesheet' type='text/css' href='styles/admin.css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src='myScript.js'></script>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
</head>
<body class="body" style="background-image:url('carbg.jpg');">
    <?php include "header.php"; ?>

    <!-- Button container -->
    <div class="buttons">
        <button onclick="window.location.href='add_admin.php';" class="btn1">Add Admin</button>
        <button onclick="window.location.href='dis_admin.php';" class="btn1">View Admins</button>
        <button onclick="window.location.href='dis_users.php';" class="btn1">View Users</button>
        <button onclick="window.location.href='dis_drivers.php';" class="btn1">Manage Drivers</button>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
