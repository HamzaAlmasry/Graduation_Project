<?php

include('../inc/config.php');

$id = $_GET['id'];

$up = mysqli_query($con, "select * from car where id=$id");

$data = mysqli_fetch_array($up);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cart.css">
    
    <link rel="stylesheet" href="../style/home1.css">
    <link rel="stylesheet" href="../style/About.css">
    <link rel="stylesheet" href="../style/sale-car.css">
    <link rel="stylesheet" href="../style/showCars.css">
    <link rel="stylesheet" href="../style/rent-car.css">
    <link rel="stylesheet" href="../style/contact.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <title>ميزو كار لتاكيد الاضافة الي سلة الشراء</title>

    <link rel="stylesheet" href="../font/goole-font.css">

    <link rel="icon"  href="../image/Mizoo.png">
    <link rel="shortcut"  href="../image/Mizoo.png">
    <link rel="apple-touch-icon"  href="../image/Mizoo.png">
</head>
<body class="back">

    <!-- Start Header -->
    <header>
            <div class="Header back">
                <div class="logo">
                   <img src="../image/Mizoo.png" alt="">
                </div>
                <div class="nav">
                    <ul class="back">
                        <li><a class="link"  href="../index.php" >الصفحة الرئيسية</a></li>
                        <li><a class="link" data-scroll="about" href="#">معلومات عننا</a></li>
                    </ul>
                </div>
                <!-- Button Nidht Mode -->
                <div class="moon">
                    <i class="fa-regular fa-moon"></i>
                </div>
                <div style="display: none;" class="search">
                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    <input type="search" class="search-input" name="" id="input-search" placeholder="ابحث هنا...">
                </div>
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars back-color"></i>
                </button>
            </div>
    </header>
    <!-- End Header -->



    <h3 class="back-color">عربيتك من <span style="color:#ff7b00">ميزو</span> كار</h3>

<div class="chart-App back-color">
   <div class='main' >

   <table class='content-table'>
                <thead>
                    <tr>
                        <th scope='col'>ماركة السيارة</th>
                        <th scope='col'>سعر السيارة</th>
                        <th scope='col'>نوع الماركة</th>
                        <th scope='col'>حذف السيارة</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th><?php  echo $data['Carbrand'] ?></th>
                        <th>$<?php  echo $data['price'] ?></th>
                        <th><?php  echo $data['typebrand'] ?></th>
                        <th><a href='../index.php'>ازالة</a></th>
                    </tr>
                </tbody>  
   </table>
   </div>
</div>





    <div class="chart-item back-color">
            <div class="chart" >
                <form action="insert_card.php" method="post">
                    <h2>هل تريد فعلا اضافة السيارة</h2>
                    <input class="inp" type="text" name="id" value='<?php  echo $data['id'] ?>' >
                    <input class="inp" type="text" name="Carbrand" value='<?php  echo $data['Carbrand'] ?>' >
                    <input class="inp" type="text" name="price" value='<?php  echo $data['price'] ?>' >
                    <input class="inp" type="text" name="typebrand" value='<?php  echo $data['typebrand'] ?>' >
                    <!-- <input type="date" name="date" value='<?php  echo $data['thedate'] ?>' > -->
                    <button name="add" type="submit" class="btn-buy">تاكيد اضافة السيارة</button>
                </form>
            </div>
    </div>


    <script src="../script/transparnt.js"></script>

</body>
</html>

