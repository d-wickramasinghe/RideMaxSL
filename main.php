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
    <nav class="navbar">
        <div >
        <img src="images/logo/ride max sl (1).png" alt="logo" class="profile-photo">
        </div>
        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="main.php">Home</a></li>
                <li><a href="login.php">Vehicles</a></li>
                <li><a href="login.php">Services</a></li>
                <li><a href="login.php">About</a></li>
                <li><a href="login.php">Help</a></li>
                <li><a href="login.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="login.php"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <a href="login.php" class="loginbtn">Log In</a>
            <a href="loginas.php" class="loginbtn">Sign Up</a>
        </div>
    </nav>
    <!--end of the header-->

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
        let currentImage = 0;

        function showNextImage() {
            images[currentImage].classList.remove('visible');
            currentImage = (currentImage + 1) % images.length;
            images[currentImage].classList.add('visible');
        }

        setInterval(showNextImage, 3000);
    </script>


    <!--Start of Footer-->
    <footer class="footer">
        <div class="footer-div1">
            <!-- Logo and Description -->
            <div class="footer-logo-section">
                <a href="index.html">
                    <img src="images/logo/ride max sl (3).png" alt="Logo" class="footer-logo">
                </a>
                <p>Your trusted vehicle rental service, offering the best deals.</p>
            </div>
    
            <!-- nav Links -->
            <div class="footer-link-section">
                <h3>Quick Links</h3>
                <ul class="footer-ul">
                    <li class="footer-list"><a href="home.php">Home</a></li>
                    <li class="footer-list"><a href="login.php">Vehicles</a></li>
                    <li class="footer-list"><a href="login.php">Services</a></li>
                    <li class="footer-list"><a href="login.php">About Us</a></li>
                    <li class="footer-list"><a href="login.php">Contact</a></li>
                    <li class="footer-list"><a href="login.php">FAQ</a></li>
                </ul>
            </div>
    
            <!-- Contact Information -->
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: support@ridemaxsl.com</p>
            </div>
    
            <!-- Social Media Icons -->
            <div class="footer-social-media">
                <h3>Follow Us</h3>
                <a href="#"><img src="images/main_icon/facebook.jpg" alt="Facebook" class="social-icon"></a>
                <a href="#"><img src="images/main_icon/twitter.jpg" alt="Twitter" class="social-icon"></a>
                <a href="#"><img src="images/main_icon/instargram.jpg" alt="Instagram" class="social-icon"></a>
                <a href="#"><img src="images/main_icon/linkedin.jpg" alt="LinkedIn" class="social-icon"></a>
            </div>
    
            <!-- App Download Links -->
            <div class="footer-app-download">
                <h3>Download Our App</h3>
                <a href="#"><img src="images/main_icon/google play.png" alt="Google Play" class="app-icon"></a>
                <a href="#"><img src="images/main_icon/app store.png" alt="App Store" class="app-icon"></a>
            </div>
        </div>
    
        <!-- Newsletter Signup -->
        <div class="footer-email">
            <h3>Stay Updated</h3>
            <p class="footer-para1">Sign up to get the latest updates and offers.</p><br/>
            <form action="#" class="footer-form">
                <input type="email" class="footer-input1" placeholder="Enter your email" required>
                <button type="submit" class="footer-btn1">Subscribe</button>
            </form>
        </div>
    
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p class="footer-para2">&copy; 2024 Vehicle Rental. All Rights Reserved. | <a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms & Conditions</a></p>
        </div>
    </footer>
</body>
</html>

