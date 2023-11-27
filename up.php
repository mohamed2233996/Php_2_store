<?php

include('confing.php');

if (isset($_POST['update'])) {
    $ID= $_POST['id'];
    $name = $_POST['name'];
    $pries = $_POST['pries'];
    $oldimg = $_POST['img'];
    $file = $_FILES["img"];
    $img_location = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name'];
    $img_up = "imgesSirv/".$img_name;
    $update ="UPDATE `production` SET Name='$name', pries='$pries', img='$img_up' WHERE id=$ID";
    mysqli_query($con , $update);
    if (move_uploaded_file($img_location ,"imgesSirv/".$img_name)) {
        echo "<script>alert('تم تحديث المنتج بنجاح')</script>";
    }else{
        echo "<script>alert(' حدث مشكله ما ,لم يتم رفع المنتج')</script>";
    };
    header('location: production.php');



};

?>