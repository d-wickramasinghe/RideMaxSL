<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Max SL - New Admin Registration</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel='stylesheet' type='text/css' href='styles/main.css'>
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

    <?php include "header.php"; ?>

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
