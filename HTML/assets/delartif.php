<?php

@include 'connect.php';

$id = $_GET['id'];
$delete = "DELETE FROM artifact WHERE Artifact_id='$id'";
$del=mysqli_query($conn,$delete);
header('location:viewartist.php');
?>