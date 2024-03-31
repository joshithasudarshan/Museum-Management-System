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
    <link rel="stylesheet" href="css/viewaf.css">
    <title>ADMIN PAGE</title>
</head>
<body>
    <section class="header">
        
        <div class="container">
            <nav>
                <a href="adminin.php"><img src="./images/logo.png" alt="" class="logo"></a>
                <div class="top-bar">
                    <ul>
                        <li><a class="active" href="adminin.php">HOME</a></li>
                        <li><a href="viewartifacts.php">VIEW ARTIFACTS</a></li>
                        <li><a href="viewartist.php">VIEW ARTIST</a></li>
                        <li><a href="viewtick.php">VIEW TICKETS</a></li>
                        <li><a href="viewfeed.php">VIEW FEEDBACK</a></li>
                        <li><a href="viewuser.php">VIEW USERS</a></li>
                        <li><a href="vieweemp.php">VIEW EMPLOYEE</a></li>
                    </ul>
                </div>
            </nav>
            <div class="text-box">
                <h1>WELCOME TO ADMIN PAGE</h1>
            </div>
            </section>
            <section>
            <div class="profile">
                        <br><br><br><br><br><br><br>
                        <center><h1>USERNAME : <span><?php echo $_SESSION['admin_name']?></span></h1></center>
                        <center><div class="btn">
                            <a href="logout.php"><button class="btn" type="submit" name="submit">LOGOUT</button></a>
                        </div></center>
        </div>
        </div>
    </section>
    
</body>
</html>