<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <title>Ride Max SL- Termsandcondition</title>
    <link rel='stylesheet' type='text/css' href='styles/terms.css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src='myScript.js'></script>
</head>
<body class="body">
    <nav class="navbar">
        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
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

<!---->
    <div class="terms-box">
        <div class="terms-text"></div>
        <h2 style ="font-size: 40px;">Terms and condition</h2>
        <p>These Rental Terms and Conditions, any documents signed by you or 
            to which you have electronically consented, any documents or agreements 
            (or links to online documents or agreements) sent to you electronically 
            in connection with your rental, the Privacy Notice, and a return record 
            with the computed rental charges together constitute the rental agreement 
            (collectively, “Agreement”) between you and Avis Rent A Car System, LLC, 
            and any affiliate conducting business under the Avis brand or independent 
            Avis System Licensee identified in the Agreement (collectively, “Avis”).
            “We”, “our”, and “us” means Avis, and “you” and “your” means the person who signs the 
            Agreement. You agree that you are not our agent for any purpose and that you cannot assign or transfer 
            your obligations under this Agreement. You rent from us the Vehicle described in the Agreement, 
            which rental is solely a bailment for mutual benefit. By renting a Vehicle from Avis, you agree to these 
            Rental Terms and Conditions, if such term is not prohibited by Applicable Law of a jurisdiction covering 
            this rental, in which case such law controls. You agree that failure to comply with 
            these Rental Terms and Conditions will constitute a breach of the Agreement. 
            If you breach the Agreement, we may exercise all remedies permitted to us under this Agreement or by law, 
            which include but are not limited to terminating the current rental, refusing to enter future rental 
            agreements with you, and/or asserting claims against you for any damages we incur because of your breach.  
            
        </p>
    </div>
    
    <h3>I Agree to the terms of services</h3>
    <div class="button">
        <button class"btn red-btn">Accept</button>
        <button class"btn gray-btn">Decline</button>
    </div>
</div>






<!--Start of Footer-->
    <footer class="footer">
        <div class="footer-div1">
            <!-- Logo and Description -->
            <div class="footer-logo-section">
                <a href="index.php">
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
            <p class="footer-para2">&copy; 2024 Vehicle Rental. All Rights Reserved. | <a href="privacy.html">Privacy Policy</a> | <a href="termsconditions.php">Terms & Conditions</a></p>
        </div>
    </footer>
    
       
      
    
</body>
</html>