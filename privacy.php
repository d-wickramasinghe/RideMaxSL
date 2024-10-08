<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='myScript.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <title>Privacy</title>
   
   <link rel="stylesheet" type='text/css' href="styles/privacy.css">
</head>
<body class="body">
    <nav class="navbar">
        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="vehicles.html">Vehicles</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="#"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <a href="login.html" class="loginbtn">Log In</a>
            <a href="signup.html" class="loginbtn">Sign Up</a>
        </div>
    </nav>
    
<!--End of Header
Enter your code below-->





    <script>
        // Function to toggle the responsive class for mobile navigation
        function toggleMenu() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    
    <div class="para1">
        <h2 style ="font-size: 40px;">Privacy policy</h2>
        <p>Welcome to the Privacy Notice of the Avis and Budget companies within the Ride max SL
             and their subsidiaries and affiliates, including, without limitation Avis Rent A Car System,
              LLC, Budget Rent A Car System, Inc., Payless Car Rental, Inc. and Budget Truck Rental, 
              LLC (we refer to these companies as “ABG,” “we,” “us,” or “our” in this Privacy Notice). 
              This Privacy Notice does not apply to Zipcar. This Privacy Notice covers the personal information we collect, 
              use and disclose through your use of our websites, mobile applications (“Apps”), products and services, 
              either online or offline (collectively, “services”). However, this Privacy Notice is not a contract and 
              does not create any legal rights or obligations not otherwise provided by law. In some cases, 
              we may provide additional disclosures or privacy notices specific to certain products, services, 
              or programs. Those additional disclosures supplement, and are to be read in conjunction with, 
              this Privacy Notice.
        </p>
    </div>
<!--Start of Footer-->
<footer class="footer">
    <div class="footer-div1">
        <!-- Logo and Description -->
        <div class="footer-logo-section">
            <a href="index.html">
                <img src="logo.png" alt="Logo" class="footer-logo">
            </a>
            <p>Your trusted vehicle rental service, offering the best deals.</p>
        </div>

        <!-- nav Links -->
        <div class="footer-link-section">
            <h3>Quick Links</h3>
            <ul class="footer-ul">
                <li class="footer-list"><a href="home.html">Home</a></li>
                <li class="footer-list"><a href="vehicles.html">Vehicles</a></li>
                <li class="footer-list"><a href="services.html">Services</a></li>
                <li class="footer-list"><a href="about.html">About Us</a></li>
                <li class="footer-list"><a href="contact.html">Contact</a></li>
                <li class="footer-list"><a href="faq.html">FAQ</a></li>
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

   
  

</html>



