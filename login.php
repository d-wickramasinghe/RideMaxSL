
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Login</title>
    <link rel='stylesheet' type='text/css' href='styles/login.css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src='myScript.js'></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="body" style="background-image: url('newbg.jpg');">

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
    <!--end of the header-->



    <div class="div1login">

    <h2>Login</h2>

    <?php
        if (isset($_GET['error'])) {
            echo "<p class='error-message'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>

        <form method="post" action="read.php" class="transparent">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <div class="g-recaptcha" data-sitekey="6LcIxlkqAAAAAKoVFvDvKHwwrMz_xJa75uMWV8lh"></div>

            <button type="submit" class="loginbtn">Login</button>
        </form>

    <div class="signup-link">
        <p>Don't have an account? <a href="cus_signup.php">Sign up here</a></p>
    </div>
    </div>




    <!--Start of Footer-->
    <footer class="footer">
        <div class="footer-div1">
            <div class="footer-logo-section">
                <a href="index.php">
                    <img src="images/logo/ride max sl (3).png" alt="Logo" class="footer-logo">
                </a>
                <p>Your trusted vehicle rental service, offering the best deals.</p>
            </div>
    
            <div class="footer-link-section">
                <h3>Quick Links</h3>
                <ul class="footer-ul">
                    <li class="footer-list"><a href="home.php">Home</a></li>
                    <li class="footer-list"><a href="vehicles.php">Vehicles</a></li>
                    <li class="footer-list"><a href="services.php">Services</a></li>
                    <li class="footer-list"><a href="about.php">About Us</a></li>
                    <li class="footer-list"><a href="contact.php">Contact</a></li>
                    <li class="footer-list"><a href="faq.html">FAQ</a></li>
                </ul>
            </div>
    
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: support@ridemaxsl.com</p>
            </div>
    
            <div class="footer-social-media">
                <h3>Follow Us</h3>
                <a href="#"><img src="images/main_icon/facebook.jpg" alt="Facebook" class="social-icon"></a>
                <a href="#"><img src="images/main_icon/twitter.jpg" alt="Twitter" class="social-icon"></a>
                <a href="#"><img src="images/main_icon/instargram.jpg" alt="Instagram" class="social-icon"></a>
                <a href="#"><img src="images/main_icon/linkedin.jpg" alt="LinkedIn" class="social-icon"></a>
            </div>
    
            <div class="footer-app-download">
                <h3>Download Our App</h3>
                <a href="#"><img src="images/main_icon/google play.png" alt="Google Play" class="app-icon"></a>
                <a href="#"><img src="images/main_icon/app store.png" alt="App Store" class="app-icon"></a>
            </div>
        </div>
    
        <div class="footer-email">
            <h3>Stay Updated</h3>
            <p class="footer-para1">Sign up to get the latest updates and offers.</p><br/>
            <form action="#" class="footer-form">
                <input type="email" class="footer-input1" placeholder="Enter your email" required>
                <button type="submit" class="footer-btn1">Subscribe</button>
            </form>
        </div>
    
        <div class="footer-bottom">
            <p class="footer-para2">&copy; 2024 Vehicle Rental. All Rights Reserved. | <a href="privacy.html">Privacy Policy</a> | <a href="termsconditions.php">Terms & Conditions</a></p>
        </div>
    </footer>
</body>
</html>

