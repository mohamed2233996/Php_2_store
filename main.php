<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=Kaushan+Script&family=Marhey:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400;1,600;1,700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/main.css">
    <title>تسوق اونلاين</title>
</head>

<body>
    <div class="container">
        <div class="maincont">
            <h2 class="main-h">ميدو <span>.كوم</span></h2>
            <img src="./img/logo.png" alt="" width="350px">
            <form action="insert.php" method="post" enctype="multipart/form-data" class="d-flex flex-column align-items-center flex-nowrap">
                <input type="text" name="name" placeholder="اسم المنتج" required>
                <input type="text" name="pries" placeholder="السعر" required>
                <input type="file" name="img" id="img" style="display: none;">
                <label for="img" class="btn btn-secondary mt-2">اختر صورة المنتج</label>
                <button name="uplode" class="btn btn-primary mt-2" type="submit">اضف المنتج</button>
                <br>
                <a href="production.php" class="all-pro">عرض كل المنتجات</a>
            </form>

        </div>
    </div>
    <div class="mt-2">Developed by Medo🖤💛</div>
</body>

</html>