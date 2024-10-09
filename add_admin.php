<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - New Admin Registration</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

        }

        .navbar {
            background-color: #ffcc00; /* Bright yellow color for the header */
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-photo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .div1 {
            flex-grow: 1;
            text-align: center;
        }

        .name {
            font-family: 'Pacifico', cursive;
            color: #333;
            font-size: 36px;
            margin: 0;
            letter-spacing: 1px;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 10px 0 0;
        }

        .nav-links li a {
            text-decoration: none;
            font-size: 18px;
            color: #333;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .nav-links li a:hover {
            color: #fff;
        }

        .user-profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
        }

        /* Form Styling */
        .fieldset {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 30px;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px); /* Optional: Adds a slight blur to the background */
        }

        h2 {
            text-align: center;
            font-size: 28px;
            color: #333;
            font-family: 'Pacifico', cursive;
            margin-bottom: 30px;
        }

        .input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .input:focus {
            border-color: #ffcc00;
            box-shadow: 0 0 8px rgba(255, 204, 0, 0.8);
        }

        .btn {
            width: 100%;
            padding: 15px;
            background-color: #ffcc00;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #333;
            color: #ffcc00;
        }

        /* Logout button styling */
        .logoutbtn {
            background-color: #333;
            color: #ffcc00;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .logoutbtn:hover {
            background-color: #ffcc00;
            color: #333;
        }

        /* Footer styles */
        footer {
            background-color: #ffcc00;
            padding: 10px;
            text-align: center;
            color: #333;
            font-weight: bold;
            border-top: 2px solid #333;
        }

        /* Media Queries */
        @media screen and (max-width: 768px) {
            .fieldset {
                padding: 20px;
            }

            .btn {
                font-size: 16px;
                padding: 12px;
            }
        }
    </style>

</head>
<body style="background-image: url('newbg.jpg');">

    <nav class="navbar">
        <img src="images/logo/ride max sl (1).png" alt="logo" class="profile-photo">

        <div class="div1">
            <h1 class="name">Welcome to Ride Max SL</h1>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="user-profile">
            <a href="cus_userprofile.php"><img src="images/main_icon/user.png" alt="User Profile" class="profile-photo"></a>
        </div>

        <div class="div2">
            <br>
            <?php
                echo '<a href="index.php" class="logoutbtn">Log out</a>';
            ?>
        </div>
    </nav>

    <fieldset class="fieldset">
        <h2>New Admin</h2>
        <form method="post" action="add_admin_insert.php">
            Name: <br>
            <input type="text" name="name" class="input" placeholder="Enter full name" required><br><br>
            
            Email: <br>
            <input type="email" name="email" class="input" placeholder="Enter email address" required><br><br>
            
            Username: <br>
            <input type="text" name="username" class="input" placeholder="Choose a username" required><br><br>
            
            Password: <br>
            <input type="password" name="password" class="input" placeholder="Create a password" required><br><br>

            <button type="submit" name="submit" value="submit" class="btn">Submit</button>
        </form>
    </fieldset>

    <?php include "footer.php"; ?>

</body>
</html>
