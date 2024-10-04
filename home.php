<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/home.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">
    <?php
        include "header.php";
    ?>
<<<<<<< Updated upstream
    <!--  Include your code below-->
=======
        <div class="image-container">
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
        let currentImageIndex = 0;

        function showNextImage() {
            images[currentImageIndex].classList.remove('visible');
            currentImageIndex = (currentImageIndex + 1) % images.length;
            images[currentImageIndex].classList.add('visible');
        }

        setInterval(showNextImage, 3000);
    </script>
>>>>>>> Stashed changes




    <!------------------------------>
    <?php
        include "footer.php";
    ?>
</body>
</html>

