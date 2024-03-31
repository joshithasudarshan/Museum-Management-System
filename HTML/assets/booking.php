<?php
@include 'connect.php';

if (isset($_POST['submit'])) {
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $number= mysqli_real_escape_string($conn, $_POST['number']);
    $tno= mysqli_real_escape_string($conn, $_POST['tno']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);

    $user_id="SELECT id FROM `ualogin` WHERE email='$email'";
    $User_id = mysqli_query($conn, $user_id);

    foreach($User_id as $row) {
        //echo $row['column_name']; // Print a single column data
        $uid=$row['id'];      // Print the entire row data
       }
       $insert = "INSERT INTO booking(user_id,date,name,phone,number_of_tickets) VALUES($uid,'$date','$name',$number,$tno)";
       mysqli_query($conn, $insert);

       if ($insert) {
          $message[] = 'booking successful!';
          header('location:booking.php');
       }
       else{
          $message[] = 'registration unsuccessful!';
       }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <title>MUSEUM TICKET BOOKING</title>
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
        </div>

   <div class="book-form">
   <center><h1>TICKET BOOKING</h1></center>
  <br><br><br>
  <?php
  if(isset($message)){
         foreach($message as $message){
            echo '<div class="error-msg">'.$error.'</div>';
         };
      };
   ?>
   <div>
   <form  action="" method="POST">

      <label>VISIT DATE :</label>
      <input class="date" id="date_picker" type='date' name='date' required value={{date}}>
      <br><br>
      <label>NAME :</label>
      <input class="name" type='text' name='name' required value="">
      <br><br>
      <label>EMAIL:</label>
      <input class="email" type='email' name='email' required value="">
      <br><br>
      <label>PHONE NUMBER:</label>
      <input class="phno" type='text' name='number' required value="">
      <br><br>
      <label>NUMBER OF TICKETS:</label>
      <input class="tno" type='number' name='tno' required value="0">
      <br><br><br>
      <a href="booking.php"></a><button type="submit" name="submit" class="btn" >BOOK TICKET</button></a>
      
    </form> 
   </div> 
 </div>
</section>
<script language="javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#date_picker').attr('min',today);
</script>
   </body>

   </html>