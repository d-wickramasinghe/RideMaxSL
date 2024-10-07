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
    <link rel = "stylesheet" href = "styles/car.css">
    <section class="vehicle-section">
            <h1>Vehicles</h1>
            <div class="vehicle-grid">
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/Hornet.jpeg" alt="Hornet">
                    <h3>Honda Hornet</h3><br>
                    <h6>Fare :- Rs : 15.00/km & Rs : 3500.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Honda Hornet">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/CD125.jpeg" alt="CD125">
                    <h3>Honda CD-125</h3><br>
                    <h6>Fare :- Rs : 11.00/km & Rs : 2500.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Honda CD-125">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/GN125.jpeg" alt="GN125">
                    <h3>Honda GN-125</h3><br>
                    <h6>Fare :- Rs : 9.00/km & Rs : 2000.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Honda GN-125">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/Discovery 150.jpeg" alt="Discovery 150">
                    <h3>Bajaj Discovery 150</h3><br>
                    <h6>Fare :- Rs : 8.00/km & Rs : 1500.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Bajaj Discovery 150">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/Ray ZR.jpeg" alt="Ray ZR">
                    <h3>Yamaha Ray ZR</h3><br>
                    <h6>Fare :- Rs : 9.00/km & Rs : 1800.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Yamaha Ray ZR">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/Dio.jpeg" alt="Honda Dio">
                    <h3>Honda Dio</h3><br>
                    <h6>Fare :- Rs : 8.00/km & Rs : 1700.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Honda Dio">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/Discovery.jpeg" alt="Discovery">
                    <h3>Bajaj Discovery</h3><br>
                    <h6>Fare :- Rs : 8.00/km & Rs : 1500.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Bajaj Discovery">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
                
                <div class="vehicle-card">
                    <img src="images/vehicle page/Pulsar.jpeg" alt="Pulsar 150">
                    <h3>Bajaj Pulsar 150</h3><br><br>
                    <h6>Fare :- Rs : 9.00/km & Rs : 1800.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Bajaj Pulsar 150">
                        <input type="hidden" name="ac_fare" value="15.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>
            </div>
        </section>
            
    <?php
        include "footer.php";
    ?>
</body>
</html>