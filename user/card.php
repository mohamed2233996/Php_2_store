<!DOCTYPE html>
<html lang="ar">

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
    <title>my card عربتي</title>
</head>

<body>
    <div class='container center-elements'>
        <h2 class='text-center fw-bold mb-3'>منتجاتي المحجوزة</h2>
        <table class='table table-striped w-75 text-center'>
            <thead class='table-dark'>
                <tr>
                    <th scope='col'>اسم المنتج</th>
                    <th scope='col'>سعر المنتج</th>
                    <th scope='col'>حذف المنتج</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../confing.php");
                $result = mysqli_query($con, "SELECT * FROM card");
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                <tr>
                    <td>$row[Name]</td>
                    <td>$row[pries]</td>
                    <td><a href='del-card.php? id=$row[ID]' class='btn btn-danger' >حذف المنتج</a></td>
                </tr>";
                    if (empty($row)) {
                        echo "<p >لا يوجد منتجات محجوزة اذهب الي المتجر للتسوق</p>";
                    };
                };
                ?>
            </tbody>
        </table>
        <div><a class='btn btn-primary mt-2' href='shop.php'>الرجوع الي المتجر</a></div>
    </div>
</body>

</html>