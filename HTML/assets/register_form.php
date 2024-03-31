<?php

@include 'connect.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phno = mysqli_real_escape_string($conn, $_POST['phno']);
   $add = mysqli_real_escape_string($conn, $_POST['add']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM ualogin WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = "INSERT INTO ualogin(name, email, pnumber, address, password, user_type) VALUES('$name','$email','$phno','$add','$pass','$user_type')";
         mysqli_query($conn, $insert);

         if ($insert) {
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login_form.php');
         }
      }
   }

};


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
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<div class="error-msg">'.$error.'</div>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="phno" class="input_field" placeholder="Phone no" required>
      <input type="text" name="add" class="input_field" placeholder="Address" required>
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>