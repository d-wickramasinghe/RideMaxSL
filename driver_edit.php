<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL-SignUp</title>
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel='stylesheet' type='text/css' href='styles/signup.css'>
    <script src='myScript.js'></script>
</head>

<body class="body">

    <?php
    include 'header.php';
    
    $id = $_SESSION['dri_id'];
    $sql = "SELECT * FROM driver WHERE driver_id='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $driver_id = $row['driver_id'];
        $driver_fname = $row['first_name'];
        $driver_lname = $row['last_name'];
        $driver_licence = $row['licence_No'];
        $driver_email = $row['email'];
        $driver_address = $row['address'];
        $driver_nic = $row['nic'];
        $driver_contact = $row['phone_number'];
        $driver_uname = $row['username'];
        $driver_password = $row['password'];
    }
    else{
        echo "No driver record found!";
        exit();
    }

    ?>


    <div>
        <fieldset>
            <h2>Edit Profile Details</h2>

            <form action="driver_edit_update.php" method="POST">

                Driver ID : <br>
                <input type="number" class="input" name="id" value="<?php echo $driver_id ?>" readonly><br><br>

                First Name : <br>
                <input type="text" class="input" name="fname" value="<?php echo $driver_fname ?>" required><br><br>

                Last Name : <br>
                <input type="text" class="input" name="lname" value="<?php echo $driver_lname ?>" required><br><br>

                Licence No : <br>
                <input type="text" class="input" name="licence" value="<?php echo $driver_licence ?>" required><br><br>

                Email : <br>
                <input type="email" class="input" name="email" value="<?php echo $driver_email ?>" required><br><br>

                Address : <br>
                <input type="text" class="input" name="address" value="<?php echo $driver_address ?>"><br><br>

                NIC : <br>
                <input type="number" class="input" name="nic" value="<?php echo $driver_nic ?>" required><br><br>

                Phone Number : <br>
                <input type="text" class="input" name="contact" value="<?php echo $driver_contact ?>" required><br><br>

                Username : <br>
                <input type="text" class="input" name="uname" value="<?php echo $driver_uname ?>" required><br><br>

                Password : <br>
                <input type="password" class="input" name="password" value="<?php echo $driver_password ?> " required><br><br>

                <input type="submit" class="btn" name="submit" value="Update">
            </form>

        </fieldset>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>