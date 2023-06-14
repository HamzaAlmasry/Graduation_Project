<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ميزو كار للعربيات المستعملة</title>

    <link rel="stylesheet" href="../font/goole-font.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../style/home1.css">
    <link rel="stylesheet" href="../style/About.css">
    <link rel="stylesheet" href="../style/sale-car.css">
    <link rel="stylesheet" href="../style/showCars.css">
    <link rel="stylesheet" href="../style/rent-car.css">
    <link rel="stylesheet" href="../style/contact.css">

    <link rel="icon"  href="../image/Mizoo.png">
    <link rel="shortcut"  href="../image/Mizoo.png">
    <link rel="apple-touch-icon"  href="../image/Mizoo.png">
    
</head>
<body>

    <!-- Start Header -->
    <header>
            <div class="Header back">
                <div class="logo">
                   <img src="../image/Mizoo.png" alt="">
                </div>
                <div class="nav">
                    <ul class="back">
                        <li><a class="link"  href="../index.php" >الصفحة الرئيسية</a></li>
                        <li><a class="link"  href="../About.php">معلومات عننا</a></li>
                    </ul>
                </div>
                <!-- Button Nidht Mode -->
                <div class="moon">
                    <i class="fa-regular fa-moon"></i>
                </div>
                <!-- Button Input Search -->
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    <input type="search" class="search-input" name="" id="input-search" placeholder="ابحث هنا...">
                </div>
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars back-color"></i>
                </button>
            </div>
    </header>
    <!-- End Header -->

<div class="new-Car back">



<!-- Start Sale New Cars -->
<div class="new-content back-content">
    <h1 class="back-color">موقع <span class="span1">ميزو كار</span> يوفر لكم العربيات المستعملة</h1>


    <!-- Select Car Brands -->
    <div class="type-Select">
        <div class="select-box" style="margin-top: 20px;">
            <div class="options-container">
                <div class="option">
                    <input type="radio" name="category" id="automobiles" class="radio">
                    <label for="automobiles">هوندا </label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="film" class="radio">
                    <label for="film">تويوتا</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="science" class="radio">
                    <label for="science">مرسيدس</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="art" class="radio">
                    <label for="art">شيفروليه</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="music" class="radio">
                    <label for="music">فيات</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="travel" class="radio">
                    <label for="travel">لانسر</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="sports" class="radio">
                    <label for="sports">سمارت</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="news" class="radio">
                    <label for="news">كيا</label>
                </div>
                <div class="option">
                    <input type="radio" name="category" id="tutorials" class="radio">
                    <label for="tutorials">نيسان</label>
                </div>
            </div>

            <div class="selected">
                اختر الماركة
            </div>

            <div class="search-box">
                <input type="text" placeholder="ابدا البحث....">
            </div>
        </div>
    </div>
    <!-- New Cars  -->
    <div class="new-content-item">
    <?php
             include('../inc/config.php');

             $result = mysqli_query($con, "SELECT * FROM car");
             while($row = mysqli_fetch_array($result)){

                if(($row['condition'] === 'مستعمله') && ($row['typebrand'] === 'معروض للبيع')){
                echo "
                <div class='Car-flex'>

                <div class='Car-flex-img'>
                    <img class='Car-flex-img-item' src='../Data-entry/$row[image]' >
                </div> 
    
                <div class='Car-flex-title'>
                    <div class='title-flex'>
                        <h1 class='cart-span'>$row[Carbrand]</h1>
                        <p class='title-flex-rent'>$$row[price]</p>
                    </div>
                    <div class='Car-flex-title-flex'>
                        <p>$row[condition]</p>
                        <p>$row[model]</p>
                    </div>
                    <div class='border'></div>
                    <ul class='Car-flex-flex'>
                        <li>
                            <i class='fa-solid fa-car'></i>
                            <a>$row[Mileage]</a>
                        </li>
                        <li>
                            <i class='fa-solid fa-car'></i>
                            <a>التكيف</a>
                        </li>
                        <li>
                            <i class='fa-solid fa-gas-pump'></i>
                            <a>$row[FuelType] </a>
                        </li>
                    </ul>
                    <div class='flex-btn'>
                    <button class='btn-Car-One'> 
                    <a  href='show.php? id=$row[id]' >اعرف المزيد</a> 
                    </button>
                        
                    <button class='add-cart'>
                    <a  href='../chart/chart.php? id=$row[id]' ><i class='fa-solid fa-cart-plus'></i> اضافة</a> 
                    </button>

                    </div>
                </div>
     </div>
                
                ";
                }
             }
    

             
?>


<!-- End Sale New Cars -->

</div>



    <script src="../jqurey/jquery-3.6.3.min.js"></script>
    <script src="../jqurey/js-jqurey.js"></script>

    <script src="../script/js2.js"></script>
    <script src="../script/transparnt.js"></script>


</body>
</html>