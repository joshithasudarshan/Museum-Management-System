<?php

@include 'connect.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $born = mysqli_real_escape_string($conn, $_POST['born']);
   $died = mysqli_real_escape_string($conn, $_POST['died']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);

   $select = " SELECT * FROM artist WHERE name = '$name' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'artist already exist!';

   }else{

         $insert = "INSERT INTO artist(name,born,died,phone) VALUES('$name','$born','$died','$phone')";
         mysqli_query($conn, $insert);

         if ($insert) {
            header('location:viewartist.php');
         }
         else{
            $message[] = 'registration unsuccessful!';
         }
      }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/log.css">

</head>
<body>
<div class="text-box">
        <h1>CMR MUSEUM</h1>
</div>
<div class="form-container">

   <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
      <h3>register artifact</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<div class="error-msg">'.$error.'</div>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="artist name">
      <input type="text" name="born" required placeholder="born on">
      <input type="text" name="died" class="input_field" placeholder="died on" required>
      <input type="text" name="phone" class="input_field" placeholder="phone no" required>
      <input type="submit" name="submit" value="done" class="form-btn">
   </form>

</div>

</body>
</html>