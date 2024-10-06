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
    <link rel = "stylesheet" href = "styles/vehicle.css">
       <img src="images/vehicle page/2.jpg" alt="Hero Banner" width="50%" height="300px"><img src="images/vehicle page/4.webp" alt="Hero Banner" width="50%" height="300px">
       <section class="vehicle-fleet">
            <h2>Vehicle Fleet</h2>
            <div class="fleet-container">
                <div class="fleet-item">
                    <img src="images/vehicle page/prius.avif" alt="Cars">
                    <p><b>Cars</b></p>
                    <button><a href = "car.php">Find out more</a></button>
                </div>
                <div class="fleet-item">
                    <img src="images/vehicle page/SUV.jpeg" alt="SUVs">
                    <p><b>SUVs</b></p>
                    <button><a href = "suv.php">Find out more</a></button>
                </div>
                <div class="fleet-item3">
                    <img src="images/vehicle page/vans.jpeg" alt="Vans & Buses">
                    <p><b>Vans & Buses</b></p>
                    <button><a href = "vans&buses.php">Find out more</a></button>
                </div>
                <div class="fleet-item">
                    <img src="images/vehicle page/motor bike.jpeg" alt="Motorbikes">
                    <p><b>Motorbikes</b></p>
                    <button><a href = "motorbike.php">Find out more</a></button>
                </div>
            </div>
        </section>
    <!------------------------------>
    <?php
        include "footer.php";
    ?>
</body>
</html>