<?php

@include 'connect.php';

session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>CONTACT US</title>
</head>
<body>
    <section class="header">
        
        <div class="container">
            <nav>
                <a href="index.html"><img src="./images/logo.png" alt="" class="logo"></a>
                <div class="top-bar">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="artifacts.php">ARTIFACTS</a></li>
                        <li><a href="artist.php">ARTIST</a></li>
                        <li><a href="booking.php">BUY TICKET</a></li>
                        <li><a class="active" href="contact.php">CONTACT US</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="text-box">
            <h1>PROFILE</h1>
        </div>
            <div class="profile">
                        <br><br><br><br><br><br><br>
                        <h1>USERNAME : <span><?php echo $_SESSION['user_name']?></span></h1>
                        <div class="btn">
                            <a href="logout.php"><button class="btn" type="submit" name="submit">LOGOUT</button></a>
            </div>
        </div>
    </section>
</body>
</html>