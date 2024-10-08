<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <script src='myScript.js'></script>
</head>
<body class="body">
    

<nav class="navbar">
         <img src="images/logo/ride max sl (1).png" alt="logo" class="profile-photo">

        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Vehicles</a></li>
                <li><a href="login.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">Help</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="#"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <?php
                include "read.php";
            ?>
            <a href="login.php" class="loginbtn1">Log In</a>
            <a href="registeras.php" class="loginbtn1">Sign Up</a>
        </div>
    </nav>

    <main>
        <section class="about-section">
            <div class="container">
                <h1>About Ride Max SL</h1>
                <p>
                    Welcome to <strong>Ride Max SL</strong>, your go-to destination for reliable and affordable vehicle rental services. 
                    Established with the mission to provide seamless transportation solutions, Ride Max SL aims to offer the best 
                    vehicles at competitive rates for both individuals and businesses.
                </p>

                <h2>Our Mission</h2>
                <p>
                    At Ride Max SL, our mission is simple: To provide our customers with exceptional vehicle rental services that 
                    meet their personal or business travel needs. We believe in making transportation easy, flexible, and accessible 
                    for everyone, whether you're renting a car for a weekend getaway or need a fleet for corporate purposes.
                </p>

                <h2>Why Choose Us?</h2>
                <ul>
                    <li><strong>Wide Selection:</strong> We offer a variety of vehicles from economy cars to luxury vehicles, ensuring 
                        that you find the perfect ride for any occasion.</li>
                    <li><strong>Affordable Rates:</strong> Our transparent pricing and competitive rates guarantee that you get the best 
                        value for your money.</li>
                    <li><strong>Easy Booking:</strong> With our user-friendly platform, booking a vehicle is quick and hassle-free.</li>
                    <li><strong>24/7 Support:</strong> Our dedicated customer service team is always available to assist you with any 
                        queries or concerns.</li>
                    <li><strong>Flexible Options:</strong> Whether it's short-term or long-term rentals, we cater to your schedule with 
                        flexibility and convenience.</li>
                </ul>

                <h2>Our Fleet</h2>
                <p>
                    From compact cars perfect for city driving to spacious SUVs and vans for larger groups, Ride Max SL offers a 
                    diverse fleet to match your travel requirements. We maintain all our vehicles to the highest standards of safety 
                    and comfort, ensuring a smooth and enjoyable experience for every customer.
                </p>

                <h2>Our Commitment to Sustainability</h2>
                <p>
                    Ride Max SL is dedicated to making a positive impact on the environment. We are constantly updating our fleet to 
                    include fuel-efficient and hybrid vehicles, reducing our carbon footprint and helping our customers make eco-friendly 
                    choices.
                </p>

                <h2>Contact Us</h2>
                <p>
                    Have any questions? Feel free to get in touch with us. Our team is here to provide you with all the information 
                    and assistance you need for a great rental experience.
                </p>

                <ul class="contact-info">
                    <li><strong>Phone:</strong> +1 800 123 4567</li>
                    <li><strong>Email:</strong> info@ridemaxsl.com</li>
                    <li><strong>Location:</strong> 123 Main Street, City, Country</li>
                </ul>
            </div>
            <div class="footer-bottom">
            <p class="footer-para2">&copy; 2024 Vehicle Rental. All Rights Reserved. | <a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms & Conditions</a></p>
        </div>
    </footer>
    
</body>
</html>