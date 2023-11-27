<?php
include("../confing.php");

$ID=$_GET['id'];

mysqli_query($con , "DELETE FROM card WHERE ID=$ID");

header('location: shop.php');


?>