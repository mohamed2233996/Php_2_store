<?php
include('../confing.php');

$ID = $_GET['id'];

$getdata = mysqli_query($con, "SELECT * FROM production WHERE ID=$ID");
$data = mysqli_fetch_array($getdata);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=Kaushan+Script&family=Marhey:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400;1,600;1,700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./main.css">
    <title>اضافه الي العربه</title>
</head>

<body>
    <div class="container mt-4">
        <div class="card text-center">
            <div class="card-header">
                <h3 class="text-center fw-bold">هل تريد اضافة المنتج للعربه؟ </h3>
            </div>
            <div class="card-body">
                <form action="insert-card.php" class="add-to-card" method="POST">
                    <input type="text" name="id" value="<?php echo ($data['ID']) ?>">
                    <input type="text" name="name" value="<?php echo ($data['Name']) ?>">
                    <input type="text" name="pries" value="<?php echo ($data['pries']) ?>">
                    <button type="submit" name="add" class="btn btn-warning mb-3">تاكيد الاضافه للعربة</button>
                    <a href="shop.php" class="retenbtn">الرجوع لصفحة المنتجات</a>
                </form>
            </div>
        </div>
</body>

</html>