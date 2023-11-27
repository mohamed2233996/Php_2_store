<?php
//conct
$host = "localhost";  //server name
$username = "root";   //user name
$password = "";      //password
$db_name = "medo store";    //database name
$tbl_name = "production";   //table name
//connect to server and select database
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con,"$db_name") or die ("no db found");


?>