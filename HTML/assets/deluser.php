<?php

@include 'connect.php';

$id = $_GET['id'];
$delete = "DELETE FROM ualogin WHERE id='$id'";
$del=mysqli_query($conn,$delete);
header('location:viewuser.php');
?>