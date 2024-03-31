<?php

@include 'connect.php';

$id = $_GET['id'];
$delete = "DELETE FROM artist WHERE Artist_ID='$id'";
$del=mysqli_query($conn,$delete);
header('location:viewartist.php');
?>