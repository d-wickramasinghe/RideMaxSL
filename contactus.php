<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-Home</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

   
    <title>Contact us</title>
  
    <link rel="stylesheet" href="styles/contactusstyles.css">
    <script src='js/contacusscripts.js'></script>
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
            <a href="login.php" class="loginbtn">Log In</a>
            <a href="registeras.php" class="loginbtn">Sign Up</a>
        </div>
    </nav>
    
<!--End of Header
Enter your code below-->

<body>

     <script>
        function toggleMenu() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        const links = document.querySelectorAll('.topnav a');
        window.onload = () => {
            links.forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add('active');
                }
            });
        };
    </script>
   
  <section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Get in touch if your question has not been answered</p>
    </div>
    <div class="container">
        <div class="contactinfo">
            <div class="box">
                <div class="icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                <p><br>123 ABS road <br> ABC <br>ABC</p><br>
                <hr style="width: 60%; border: 1px solid;">
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                <p><br>077-1234567</p><br>
                <hr style="width: 60%; border: 1px solid;">
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p><br>support@ridemaxsl.com</p><br>
                    <hr style="width: 60%; border: 1px solid;">

</div>
            </div>
        </div>
        <div class="contactform">
            <form>
                <h2>SEND MESSAGES</h2>
                <div class="inputbox">
                    <label>Full name</label>
                    <input type="text" name="cname" placeholder="Enter full name" autocomplete="off" required><br><br>
                    <label>Email</label>
                    <input type="email" name="cmail" placeholder="Enter Email" autocomplete="off" required><br><br>
                    <label>Message</label>
                    <input type="text" name="cmessage" placeholder="Enter Your message" autocomplete="off"><br><br>                
                     <input type = "submit"  name = "conbutton" value = "send" id = "conbutton">   
                </div>
            </form>
            <br><br>
        </div>
    </div>
  </section>  


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



