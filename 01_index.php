<?php

session_start();


if (isset($_SESSION["user_id"])) { //to display name of the user when logged in
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediWay</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="01z_homepage_style.css">
</head>
<body>
    <header>
        <div class="navbar">

            <!-- mediWay logo -->
            <div class="nav-logo">
                <div class="logo"></div>
            </div>

            <div class="nav-options">
                <!-- guides -->
                <div class="guides">
                    <div class="home" ><a href="01_index.php" class="home">Home</a></div>
                    <div class="home"><a href="#" class="home">About Us</a></div>
                    <div class="home"><a href="#" class="home">Contact Us</a></div>
                    <div class="home"><a href="#" class="home">Help</a></div>
                </div>

                <!-- book appointment -->
                <div class="book-app">
                    <a href="02_book_appointment.html" class="book-app-button">Book Appointment</a>
                </div>

                <!-- profile -->
                <div class="profile"></div>
            </div>

        </div>

        <div class="panel">

            <!-- text to sign language -->
            <div class="sign-lang">
                <a href="06_sign_language.html" class="sign-lang-button">Sign Language</a>
            </div>
            
            <!-- emergency -->
            <div class="emergency">
                <a href="#" class="emergency-button">Emergency</a>
            </div>

            <!-- request callback -->
            <div class="request-callback">
                <a href="#" class="request-callback-button">Request Callback</a>
            </div>


        </div>
    </header>

    <div class="hero-section">
        <div class="hero-msg">

            <?php if (isset($user)): ?>
            
            <!-- <p>Hello  ~ ~ </p>
            <p> You are on MediWay. Book your appointment to the nearest hospital ~ ~ </a></p>
            
            <p><a href="logout.php"> Log out</a></p> -->

            <p>Hello <?= htmlspecialchars($user["name"]) ?> ~ ~ You are on MediWay. Book your appointment to the nearest hospital ~ ~ </a>
            <a href="logout.php"> Log out</a></p>

            
            <?php else: ?>
            
            <p> Welcome to MediWay. We can guide you to the nearest hospital of your choice <3 ~ ~ </a></p>
            <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>

            <?php endif; ?>



        </div>
    </div>
    
</body>
</html>