<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/home.css'>
    <link rel='stylesheet' type='text/css' href='styles/car.css'>

</head>
<body class="body">
    <?php
        include "header.php";
    ?>
    <link rel = "stylesheet" href = "styles/car.css">
    <section class="vehicle-section">
            <h1>Vehicles</h1>
            <div class="vehicle-grid">
                <!-- Card 1 -->
                <div class="vehicle-card">
                    <img src="images/vehicle page/civic.jpeg" alt="civic">
                    <h3>Honda CIVIC</h3><br>
                    <h6>A/C Fare :- Rs : 36.00/km & Rs : 5200.00/day</h6>
                    <h6>Non A/C Fare :- Rs : 26.00/km & Rs : 2600.00/day</h6>
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Honda CIVIC">
                        <input type="hidden" name="ac_fare" value="36.00/km">
                        <input type="hidden" name="non_ac_fare" value="26.00/km">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                </div>
                    <!-- Card 2 -->
                <div class="vehicle-card">
                    <img src="images/vehicle page/benz.jpeg" alt="Benz C Class">
                    <h3>Benz C Class</h3><br>
                    <h6>A/C Fare: Rs: 55.00/km & Rs: 8500.00/day</h6>
                    <h6>Non A/C Fare: Rs: 40.00/km & Rs: 4600.00/day</h6>
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Benz C Class">
                        <input type="hidden" name="ac_fare" value="55.00/km">
                        <input type="hidden" name="non_ac_fare" value="40.00/km">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                </div>

                <!-- Card 3 -->
                <div class="vehicle-card">
                    <img src="images/vehicle page/bmw.jpeg" alt="BMW">
                    <h3>BMW 520D</h3><br>
                    <h6>A/C Fare: Rs: 50.00/km & Rs: 8200.00/day</h6>
                    <h6>Non A/C Fare: Rs: 35.00/km & Rs: 4300.00/day</h6>
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="BMW 520D">
                        <input type="hidden" name="ac_fare" value="50.00/km">
                        <input type="hidden" name="non_ac_fare" value="35.00/km">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>



                <!-- Card 4 -->
                <div class="vehicle-card">
                    <img src="images/vehicle page/prius.jpeg" alt="Honda Prius">
                    <h3>Honda Prius</h3><br>
                    <h6>A/C Fare :- Rs : 34.00/km & Rs : 4900.00/day</h6>
                    <h6>Non A/C Fare :- Rs : 23.00/km & Rs : 2300.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Honda Prius">
                        <input type="hidden" name="ac_fare" value="34.00">
                        <input type="hidden" name="non_ac_fare" value="23.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                </div>
                </div>

                <!-- Card 5 -->
                <div class="vehicle-card">
                    <img src="images/vehicle page/aqua.jpeg" alt="Toyota Aqua">
                    <h3>Toyota Aqua</h3><br>
                    <h6>A/C Fare :- Rs : 32.00/km & Rs : 4600.00/day</h6>
                    <h6>Non A/C Fare :- Rs : 20.00/km & Rs : 2100.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Toyota Aqua">
                        <input type="hidden" name="ac_fare" value="32.00">
                        <input type="hidden" name="non_ac_fare" value="20.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                </div>
                </div>


                <!-- Card 6 -->
                <div class="vehicle-card">
                    <img src="images/vehicle page/Premio.jpeg" alt="Premio">
                    <h3>Toyota Premio</h3><br>
                    <h6>A/C Fare :- Rs : 45.00/km & Rs : 5800.00/day</h6>
                    <h6>Non A/C Fare :- Rs : 32.00/km & Rs : 4100.00/day</h6>
                    <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Toyota Premio">
                        <input type="hidden" name="ac_fare" value="45.00">
                        <input type="hidden" name="non_ac_fare" value="32.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="vehicle-card">
                <img src="images/vehicle page/Yaris.jpeg" alt="Toyota Yaris">
                <h3>Toyota Yaris</h3><br>
                <h6>A/C Fare :- Rs : 31.00/km & Rs : 4400.00/day</h6>
                <h6>Non A/C Fare :- Rs : 18.00/km & Rs : 2000.00/day</h6>
                <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Toyota Yaris">
                        <input type="hidden" name="ac_fare" value="31.00">
                        <input type="hidden" name="non_ac_fare" value="18.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                </div>
                </div>

                <!-- Card 8 -->
                <div class="vehicle-card">
                <img src="images/vehicle page/Belta.jpeg" alt="Belta">
                <h3>Toyota Belta</h3><br>
                <h6>A/C Fare :- Rs : 31.00/km & Rs : 4500.00/day</h6>
                <h6>Non A/C Fare :- Rs : 19.00/km & Rs : 2100.00/day</h6>
                <div class="actions">
                    <form action="reservation_create.php" method="POST">
                        <input type="hidden" name="vehicle_type" value="Toyota Belta">
                        <input type="hidden" name="ac_fare" value="31.00">
                        <input type="hidden" name="non_ac_fare" value="19.00">
                        <button type="submit" class="book-btn">Book Now</button>
                    </form>
                </div>
                </div>
        </section>
            <!------------------------------>
    <?php
        include "footer.php";
    ?>
</body>
</html>