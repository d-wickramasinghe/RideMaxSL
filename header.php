<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config.php';

$profileUrl = 'login.php';
$loggedIn = false;

if (isset($_SESSION["user_id"])) {

    $loggedIn = true;
    $userId = $_SESSION["user_id"];

    $sql_user = "SELECT user_type FROM user_login WHERE user_id = ?";
    $stmt = $con->prepare($sql_user);

    if ($stmt) {
        $stmt->bind_param("i", $userId);
        $stmt->execute();

        $result_user = $stmt->get_result();

        if ($result_user && $result_user->num_rows > 0) {

            $row = $result_user->fetch_assoc();

            if ($row['user_type'] === 'driver') {
                $profileUrl = 'driver_profile.php';
            } elseif ($row['user_type'] === 'admin') {
                $profileUrl = 'admin.php';
            } else {
                $profileUrl = 'cus_userprofile.php';
            }
        }

        $stmt->close();
    }
}
?>

<nav class="navbar">

    <!-- Logo -->
    <div class="logo-container">
        <a href="<?php echo $loggedIn ? 'home.php' : 'index.php'; ?>">
            <img src="images/logo/ride max sl (1).png"
                 alt="Ride Max SL Logo"
                 class="logo">
        </a>
    </div>

    <!-- Navigation -->
    <div class="div1">

        <h1 class="name">Welcome to Ride Max SL</h1>

        <ul class="nav-links">

            <?php if ($loggedIn): ?>

                <li><a href="home.php">Home</a></li>
                <li><a href="vehicle.php">Vehicles</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="reservationread.php">Reservation</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contactus.php">Contact Us</a></li>

            <?php else: ?>

                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contactus.php">Contact Us</a></li>

            <?php endif; ?>

        </ul>

    </div>

    <!-- User Profile -->
    <div class="user-profile">
        <a href="<?php echo $profileUrl; ?>">
            <img src="images/main_icon/user.png"
                 alt="User Profile"
                 class="profile-photo">
        </a>
    </div>

    <!-- Login / Logout -->
    <div class="div2">

        <?php if ($loggedIn): ?>

            <a href="logout.php"
               class="logoutbtn"
               onclick="return confirm('Are you sure you want to logout?');">
                Log Out
            </a>

        <?php else: ?>

            <a href="login.php" class="loginbtn">Log In</a>
            <a href="registeras.php" class="loginbtn">Sign Up</a>

        <?php endif; ?>

    </div>

</nav>