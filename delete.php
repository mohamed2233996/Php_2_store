<?php
include('confing.php');

$ID = $_GET['id'];
$result = mysqli_query($con , "Delete FROM `production` WHERE id='$ID'");
header('location: production.php');

?>