<?php
@include 'connect.php';

if (isset($_POST['submit'])) {

    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $message= mysqli_real_escape_string($conn, $_POST['message']);

   
       $insert = "INSERT INTO feedback(name,email,message) VALUES('$name','$email','$message')";
       mysqli_query($conn, $insert);

       if ($insert) {
          header('location:index.php');
       }
      
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Merriweather:wght@300;400;900&display=swap" rel="stylesheet">

</head>
<body>
    <section class="header">
        
    <div class="container">
        <nav>
            <a href="index.html"><img src="./images/logo.png" alt="" class="logo"></a>
            <div class="top-bar">
                <ul>
                    <li><a class="active" href="index.php">HOME</a></li>
                    <li><a href="artifacts.php">ARTIFACTS</a></li>
                    <li><a href="artist.php">ARTIST</a></li>
                    <li><a href="booking.php">BUY TICKET</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>WELCOME TO CMR MUSEUM</h1>
            <p>The best introduction to art is to stroll through a museum. The more art you see, the more you'll learn to define your own taste.</p>
        </div>
    </div>
    </section>
    <section class="sections">
        <h1>OUR DISPLAY SECTIONS</h1>
        <p>.....We display various kinds of paintings , sculptures and historical artifacts.....</p>
        <div class="row">
            <div class="facilities">
                <img src="./images/self-portrait.jpg" alt="">
                <h3>PAINTINGS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, neque id congue vehicula, velit leo dignissim mauris, congue porta ipsum augue a ligula.</p>
            </div>
            <div class="facilities">
                <img src="./images/sculpture.jpg" alt="">
                <h3>ARTIFACTS AND SCULPTURES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, neque id congue vehicula, velit leo dignissim mauris, congue porta ipsum augue a ligula.</p>
            </div>
        </div>

    </section>
    <section class="feedback">
      <h1>FEEDBACK<br>------------------------</h1>
      <div class="form">
        <form  action="" method="POST">
        <br>
     
        <label>NAME :</label>
      <input class="name" type='text' name='name'>
      <br><br>
      <label>EMAIL :</label>
      <input class="email" type='text' name='email'>
      <br><br>
      <label>FEEDBACK :</label>
      <textarea class="feed" name="message" type='text' rows="5" cols="20"></textarea></textarea>
      <br><br><br>
      <a href="index.html"><button type="submit" name="submit" class="btn" >SUBMIT</button></a>
      </form>
      </div>
    </section>

</body>
</html>