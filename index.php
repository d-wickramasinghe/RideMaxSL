<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["user_id"])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/home.css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src='js/myScript.js'></script>
</head>
<body class="body">
    <?php include "header.php"; ?>

    <div class="image-container">
        <!-- Hero Overlay Content -->
        <div class="hero-overlay">
            <h1 class="hero-title">Experience the Best Ride</h1>
            <p class="hero-subtitle">Premium car rental service at your fingertips. Discover our wide range of vehicles.</p>
            <a href="vehicle.php" class="cta-button">Browse Vehicles</a>
        </div>
        
        <!-- Slider Images -->
        <img src="images/home page img/1.png" alt="Image 1" class="image visible">
        <img src="images/home page img/2.png" alt="Image 2" class="image">
        <img src="images/home page img/3.png" alt="Image 3" class="image">
        <img src="images/home page img/4.png" alt="Image 4" class="image">
        <img src="images/home page img/5.png" alt="Image 5" class="image">
        <img src="images/home page img/6.png" alt="Image 6" class="image">
        <img src="images/home page img/7.png" alt="Image 7" class="image">
    </div>

    <script>
        const images = document.querySelectorAll('.image');
        let currentImage = 0;

        function showNextImage() {
            images[currentImage].classList.remove('visible');
            currentImage = (currentImage + 1) % images.length;
            images[currentImage].classList.add('visible');
        }

        // Change image every 4 seconds for a slower, more premium feel
        setInterval(showNextImage, 4000);
    </script>  

    <?php include "footer.php"; ?>
</body>
</html>


