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
<section id="services">
        <h2>Our Services</h2>

        <!-- Car Rental Section -->
        <div class="service" id="car-rental">
            <h3>Car Rentals</h3>
            <p>We offer a wide range of cars for rent, including compact, sedan, SUV, and more. Our vehicles are well-maintained and affordable for daily, weekly, or monthly rentals.</p>
            <button onclick="showMoreDetails('car')">More Details</button>
            <div id="car-details" class="details" style="display: none;">
                <p>Our fleet includes top brands like Toyota, Honda, Ford, and more. All cars come with insurance and 24/7 roadside assistance.</p>
            </div>
        </div>

        <!-- Bike Rental Section -->
        <div class="service" id="bike-rental">
            <h3>Bike Rentals</h3>
            <p>Explore the city with our convenient and budget-friendly bike rentals. Choose from various models suitable for commuting or adventure rides.</p>
            <button onclick="showMoreDetails('bike')">More Details</button>
            <div id="bike-details" class="details" style="display: none;">
                <p>Our bikes include mountain bikes, road bikes, and electric bikes, all available at competitive rates. Helmets and accessories are included!</p>
            </div>
        </div>

        <!-- Luxury Vehicle Rental Section -->
        <div class="service" id="luxury-rental">
            <h3>Luxury Rentals</h3>
            <p>Arrive in style with our luxury vehicle rental service. Choose from high-end cars like BMW, Mercedes, Audi, and more.</p>
            <button onclick="showMoreDetails('luxury')">More Details</button>
            <div id="luxury-details" class="details" style="display: none;">
                <p>Our luxury fleet includes sports cars, convertibles, and executive sedans, perfect for weddings, special occasions, and business trips.</p>
            </div>
        </div>
    </section>
    <!------------------------------>
    <?php
        include "footer.php";
    ?>
</body>
</html>