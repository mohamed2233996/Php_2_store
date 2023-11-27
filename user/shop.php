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
    <title>المنتجات</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold" href="card.php">عربتي My Card</a>
        </div>
    </nav>
    <!-- end of header -->
    <div class="container text-center">
        <h1 class="mb-3">جميع النتجات المتوفره</h1>
        <div class="row justify-content-center">
            <?php
            include '../confing.php';
            $sql = "SELECT * FROM production";
            $result = mysqli_query($con, $sql);
            while ($rows = mysqli_fetch_array($result)) {
                echo "
                <div class='col-sm-6 col-md-4 col-lg-3 card-div mt-2'>
                    <div class='card'>
                        <img src='../$rows[img]' class='pro-img'>
                        <h2 class='pro-h'>$rows[Name]</h2>
                        <p class='pro-pri'>السعر: $$rows[pries]</p>
                        <div class='btns mb-2'>
                            <a href='val.php? id=$rows[ID]' class='btn w-75 btn-success'><i class='fa-solid fa-cart-plus me-2'></i>اضف الي السله</a>
                        </div>
                    </div>
                </div>
                ";
            };
            ?>
        </div>
    </div>
    <div class="mt-2">Developed by Medo🖤💛</div>
</body>

</html>