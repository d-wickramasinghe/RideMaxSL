<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/home.css'>
    <link rel='stylesheet' type='text/css' href='styles/services.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">
    <?php
        include "header.php";
    ?>
<section id="services" class="section">
        <h2 class="heading">Our Services</h2>

        <!-- Car Rental Section -->
        <div class="services" id="car-rental">
            <h3 class="titles">Car Rentals</h3>
            <p>We offer a wide range of cars for rent, including compact, sedan, SUV, and more. Our vehicles are well-maintained and affordable for daily, weekly, or monthly rentals.</p>
            <p>Our fleet includes top brands like Toyota, Honda, Ford, and more. All cars come with insurance and 24/7 roadside assistance.</p>
            
        </div>

        <!-- Bike Rental Section -->
        <div class="services" id="bike-rental">
            <h3 class="titles">Bike Rentals</h3>
            <p>Explore the city with our convenient and budget-friendly bike rentals. Choose from various models suitable for commuting or adventure rides.</p>
            <p>Our bikes include mountain bikes, road bikes, and electric bikes, all available at competitive rates. Helmets and accessories are included!</p>
        </div>

        <!-- Luxury Vehicle Rental Section -->
        <div class="services" id="luxury-rental">
            <h3 class="titles">Luxury Rentals</h3>
            <p>Arrive in style with our luxury vehicle rental service. Choose from high-end cars like BMW, Mercedes, Audi, and more.</p>
            <p>Our luxury fleet includes sports cars, convertibles, and executive sedans, perfect for weddings, special occasions, and business trips.</p>
        </div>
    </section>
    <!------------------------------>
    <?php
        include "footer.php";
    ?>
</body>
</html>