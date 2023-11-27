<?php

include("../confing.php");

if (isset($_POST['add'])) {
    $Name = $_POST['name'];
    $Pries = $_POST['pries'];
    $sql = "INSERT INTO card (name , pries ) VALUES ('$Name', '$Pries')";
    mysqli_query($con , $sql);
    header('location: card.php');
};



?>