<?php

include('confing.php');

if (isset($_POST['uplode'])) {
    $name = $_POST['name'];
    $pries = $_POST['pries'];
    $file = $_FILES["img"];
    $img_location = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name'];
    $img_up = "imgesSirv/".$img_name;
    $insert ="INSERT INTO `production` (`Name`, `pries`, `img`) VALUES ('$name','$pries','$img_up')";
    mysqli_query($con , $insert);
    if (move_uploaded_file($img_location ,"imgesSirv/".$img_name)) {
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
    }else{
        echo "<script>alert(' حدث مشكله ما ,لم يتم رفع المنتج')</script>";
    };
    header('location: main.php');



};

?>