<?php

@include 'connect.php';

if(isset($_POST['submit'])){

   $dept = mysqli_real_escape_string($conn, $_POST['dept']);
   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $date_acquired = mysqli_real_escape_string($conn, $_POST['date_acquired']);
   $description = mysqli_real_escape_string($conn, $_POST['description']);
   $artist = mysqli_real_escape_string($conn,$_POST['artist']);

   $select = " SELECT * FROM artifact WHERE title = '$title' ";
   $result = mysqli_query($conn, $select);

   $artist_id="SELECT Artist_id FROM artist WHERE Name='$artist'";
   $Artist_id = mysqli_query($conn, $artist_id);

   $dept_id="SELECT Dept_id FROM department WHERE dName='$dept'";
   $Dept_id = mysqli_query($conn, $dept_id);
   foreach($Artist_id as $row) {
      //echo $row['column_name']; // Print a single column data
      $aId=$row['Artist_id'];       // Print the entire row data
  }
  foreach($Dept_id as $row) {
   //echo $row['column_name']; // Print a single column data
   $dId=$row['Dept_id'];      // Print the entire row data
  }

   if(mysqli_num_rows($result) > 0){

      $error[] = 'artifact already exist!';

   }else{
         $insert = "INSERT INTO artifact(dept_id, title, date_acquired, description, artist_id) VALUES($dId,'$title','$date_acquired','$description',$d)";
         mysqli_query($conn, $insert);

         if ($insert) {
            header('location:viewartifacts.php');
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
      <input type="text" name="dept" required placeholder="depatment name">
      <input type="text" name="title" required placeholder="enter your title">
      <input type="date" name="date_acquired" class="input_field" placeholder="date acquired" required>
      <input type="text" name="description" class="input_field" placeholder="description" required>
      <input type="text" name="artist" required placeholder="artist name">
      <input type="submit" name="submit" value="done" class="form-btn">
   </form>

</div>

</body>
</html>