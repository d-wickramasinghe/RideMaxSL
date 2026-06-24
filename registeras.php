<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Sign Up Options</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/loginas.css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src='js/myScript.js'></script>
</head>
<body class="body">
    <?php include 'header.php'; ?>



    <div class="div1loginas">

    <h2>Register As</h2>

    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    
    <form action="cus_signup.php" method="post">

        <a href="cus_signup.php" class="loginAsbtn">Customer</a>
        <a href="driverSignup.php" class="loginAsbtn">Driver</a>

    </form>

    </div>




    <?php include 'footer.php'; ?>
</body>
</html>

