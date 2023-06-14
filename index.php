<?php
// session_start();
// include('inc/connections.php');
// if(isset($_SESSION['id']) && isset($_SESSION['username'])){
//     $id = $_SESSION['id'];
//     $user = $_SESSION['username'];

?>





<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ميزو كار</title>


    <link rel="stylesheet" href="package/swiper-bundle.min.css">
    <link rel="stylesheet" href="font/goole-font.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="style/home1.css">
    <link rel="stylesheet" href="style/About.css">
    <link rel="stylesheet" href="style/sale-car.css">
    <link rel="stylesheet" href="style/showCars.css">
    <link rel="stylesheet" href="style/rent-car.css">
    <link rel="stylesheet" href="style/contact.css">

    
    <link rel="icon"  href="image/Mizoo.png">
    <link rel="shortcut"  href="image/Mizoo.png">
    <link rel="apple-touch-icon"  href="image/Mizoo.png">


</head>
<body>
      


    <!-- Start Section Home -->
<section class="Home-App height back"  id="home" >

    <!-- Start Header -->
    <header>
            <div class="Header back">
                <div class="logo">
                   <img src="image/Mizoo.png" alt="">
                </div>
                <div class="nav">
                    <ul class="back">
                        <li><a class="link" data-scroll="home" href="#" >الصفحة الرئيسية</a></li>
                        <li><a class="link" data-scroll="about" href="#">معلومات عننا</a></li>
                        <li>
                            <a class="link" data-scroll="sale" href="#" >بيع</a>
                        </li>
                        <li><a class="link" data-scroll="rent" href="#">ايجار</a></li>
                        <li><a class="link" data-scroll="contact" href="#">الاتصال بنا</a></li>
                        <!-- <a href="logout.php" class="logout none" >تسجيل خروج</a> -->
                    </ul>
                </div>


                <a href="chart/card.php" class="Cart" id="cart-icon">
                    <i class="fa-solid fa-cart-plus"></i>
                    <span class="cart-num"></span>
                </a>


                <!-- Button Nidht Mode -->
                <div class="moon">
                    <i class="fa-regular fa-moon"></i>
                </div>
                <!-- Button Input Search -->
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    <input type="search" class="search-input" name="" id="input-search" placeholder="ابحث هنا...">
                </div>
                <!-- Button Sign Out -->
                <!-- <a href="logout.php"  class="logout block" >تسجيل خروج</a> -->
                <!-- Button Nav Bar -->
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars back-color"></i>
                </button>
            </div>
    </header>
    <!-- End Header -->

    <!-- Start Home One  -->
    <div class="Home active" style="background-image: url(image/home1.jpeg);">
        <div class="contrenir">  
            <div class="contrenir-item">
                <h1> لدينا كل <br> <span >ما تحتاجه <span class="span"> سيارتك </span> </span> </h1>
                <p>لو بتفكر تشتري عربية جديدة يعني اكيد بتدور علي حد مضمون ومعروف وتقسيطه مريح وموجود عنده مواصفات العربية اللي تناسبك يبقي انت في المكان المناسب</p>

                

                <a class="btn btn-singup " href="login/login.php">تسجيل دخول</a>
                <div class="icon">
                    <a href="#" target="-blank"><i class="fa-brands fa-facebook i"></i></a>
                    <a href="#" target="-blank"><i class="fa-brands fa-instagram i"></i></a>
                    <a href="#" target="-blank"><i class="fa-brands fa-twitter i"></i></a>
                    <a href="#" target="-blank"><i class="fa-brands fa-github i"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home One  -->

</section>
    <!-- Start Section Home -->

    <!-- Start Section About -->
<section class="car-About height back" id="about" >
    <div class="contrenir-itemr back-content">
        <div class="contrenir">

            <div class="title-About"> 
               <img src="image/aboutimg.png " alt="">
            </div>
    
            <div class="title-About-two">
                <div class="title-About-two-img">
                    <h1 class="back-color"> كيف تستخدم موقع <span class="span"> ميزو </span> كار </h1>
                    <p class="parag back-color"> موقع <span  class="span"> ميزو كار</span> يتيح لك سهولة في ايجاد مشتري لسيارتك</p>
                    <p class="parag back-color">كل ما تريد معرفتة عن الموقع وطريقة تسجيل الدخول في الموقع</p>
                    <a href="About.php" class="btn2">معرفة المزيد</a>
                </div>
            </div>   

        </div>
    </div>
</section>
    <!-- End Section About -->

    <!-- Start Section Sale -->
<section class="Sale-Home height back" id="sale" >

    <div class="swiper swiperCopy back-content">

        <!-- Start Home Sale -->
        <div class="swiper-slee">

            <div class="Sale-Home-item">
                <h1 class="back-color new1-A">مجموعة من افضل سياراتنا المتميزة</h1>
                 <!-- New And Used Cars Button -->
                <div class="new">
                    <a href="index/new.php" class="new1-a" >جديد</a>
                    <a href="index/used.php" class="new1-b" >استعمال</a>
                </div>
                <!-- Select Car Brands -->
                <div class="type-Select">
                    <div class="select-box">
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
            </div> 
            <!-- Slide New And Used Cars  -->
            <div class="swiper-wrapper swiper-wrapper-Copy">
      
            <!-- Start Box car => Section Sale -->
            <?php
             include('inc/config.php');
             $result = mysqli_query($con, "SELECT * FROM car");
             while($row = mysqli_fetch_array($result)){
                if($row['typebrand'] === 'معروض للبيع'){
                echo "
                <div class='swiper-slide swiper-slide-Copy' style='width:250px' >
                    <div class='Car-flex'>
                        <div class='Car-flex-img'>
                            <img src='$row[image]' class='Car-flex-img-item'  alt='..'>                       
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
                                    <a>$row[FuelType]</a>
                                </li>
                            </ul>
                            <div class='flex-btn'>
                                <button class='Btn-car'> 
                                <a  href='index/show.php? id=$row[id]' >اعرف المزيد</a> 
                                </button>
                                
                                <button class='add-cart'>
                                <a  href='chart/chart.php? id=$row[id]' ><i class='fa-solid fa-cart-plus'></i> اضافة</a> 
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                
                
                ";
                }
             }
    

             
            ?>
         
                
            </div> 

        </div>
         <!-- End Home Sale -->

        <div class="swiper-pagination"></div>
         
    </div>
     
</section>
    <!-- End Section Sale -->

    <!-- Start Section Rent --> 
<section class="Rent-Home height back" id="rent">
    <!-- Start Home Rent -->
     <div class="Rent-contrenir back-content">
        <!-- <div class="contrenir"> -->
            <div class="Rent-contrenir-item">

                <div class="Rent-contrenir-item-title back-color">
                    <h1 class="ani">موقع <span class="span1">ميزو كار</span> يوفر لكم افضل السيارات للايجار</h1>
                    <p class="ani1">ايجارك عندنا ومش هتلاقي زينا </p>
                </div>

                <!-- Cars Rent -->
                <div class="Rent-contrenir-item-content">
                <?php
             include('inc/config.php');
             $result = mysqli_query($con, "SELECT * FROM car");
             while($row = mysqli_fetch_array($result)){
                if($row['typebrand'] === 'معروض لايجار'){
                echo "
            <div class='Car-flex'>
                <div class='Car-flex-img'>
                    <img class='Car-flex-img-item'  src='$row[image]' alt=''>
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
                            <a>$row[FuelType]</a>
                        </li>
                    </ul>
                    <div class='flex-btn'>
                        <button class='btn-Car-One'> 
                           <a  href='index/show.php? id=$row[id]' >اعرف المزيد</a> 
                        </button>

                        <button class='add-cart'>
                        <a  href='chart/chart2.php? id=$row[id]' ><i class='fa-solid fa-cart-plus'></i> اضافة</a> 
                        </button>


                    </div>
                </div>
            </div>

                ";
                }
            }
   

            
           ?>
                </div>
            </div>
        <!-- </div> -->
    </div> 
    <!-- End Home Rent -->


</section>
    <!-- End Section Rent -->

    <!-- Start Section Contact  -->
<section class="contact-Home height back" id="contact">
    <div class="contactUS contact-contrenir back-content">
        <!-- Start Home Contact -->
        <div class="box">
            <!-- Form Contact -->
            <div class="contact form">
                <h3>الاتصال بنا:</h3>
                <form action="">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>الاسم الاول</span>
                                <input type="text" placeholder="حمزة" required>
                            </div>
                            <div class="inputBox">
                                <span>الاسم التاني</span>
                                <input type="text" placeholder="عزت" required>
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>الايميل</span>
                                <input type="email" placeholder="hamza@email.com" required>
                            </div>
                            <div class="inputBox">
                                <span>تليفون</span>
                                <input type="text" placeholder="+91 987 654 3210" required>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>الرسائل</span>
                                <textarea name="" placeholder="اكتب رسالتك هنا...." required></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="ارسال">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Us information -->
            <div class="contact info">
                <h3>معلومات الاتصال</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>Cannaught palace, New Delhi </p>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:loremipsum@email.com">loremipsum@email.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:+91 987 654 3210">+91 987 654 3210</a>
                    </div>
                </div>
                <ul class="sci">
                   <li><a href="#"><i class="fa-brands fa-facebook "></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-twitter "></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-github "></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-instagram "></i></a></li>
                </ul>
            </div>
             <!-- Contact Map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13677.715429746368!2d31.479780571568803!3d31.014299099417276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f783619ae8188d%3A0x5a329a16af3ceeed!2z2YLYsdmK2Kkg2YXZitiqINi52YTZiQ!5e0!3m2!1sar!2seg!4v1681507740500!5m2!1sar!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- End Home Contact -->
    </div>
</section>
    <!-- End Section Contact  -->

    <!-- Start Footer  -->
<footer>
    <div class="contrenirr">
        <!-- Footer About -->
        <div class="sec aboutus">
            <h2>معلومات عننا</h2>
            <p>لو بتفكر تشتري عربية جديدة يعني اكيد بتدور علي حد مضمون ومعروف وتقسيطه مريح وموجود عنده مواصفات العربية اللي تناسبك يبقي انت في المكان المناسب</p>
            <ul class="scii">
                <li><a href="#"><i class="fa-brands fa-facebook "></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter "></i></a></li>
                <li><a href="#"><i class="fa-brands fa-github "></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram "></i></a></li>
            </ul>
        </div>
        <!-- Footer quickLinks -->
        <div class="sec quickLinks">
            <h2>روابط</h2>
            <ul>
                <li><a href="About.php">معلومات عننا</a></li>
                <li><a href="#">التعليمات</a></li>
                <li><a href="#">سياسة الخصوصية</a></li>
                <li><a href="#">مساعدة</a></li>
                <li><a href="#">الشروط & التشريعات</a></li>
                <li><a href="#">اتصال</a></li>
            </ul>
        </div>
        <!-- Footer Contact -->
        <div class="sec contact-fo">
            <h2>معلومات الاتصال</h2>
            <ul class="info-fo">
                <li>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <p>Cannaught palace, New Delhi </p>
                </li>
                <li>
                    <span><i class="fa-solid fa-phone"></i></span>
                    <p><a href="tel:+91 987 654 3210">+91 987 654 3210</a><br>
                        <a href="tel:+91 987 654 3210">+91 987 654 3210</a></p>
                </li>
                <li>
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <p><a href="mailto:loremipsum@email.com">loremipsum@email.com</a></p>
                </li>
            </ul>
        </div>
    </div> 
</footer>
    <!-- Start Footer  -->

<div class="copyrightText">
    <p> حقوق الطبع والنشر 2022. كل الحقوق محفوظة.</p>
</div>






    <script src="package/swiper-bundle.min.js"></script>

    <script src="package/swiper.js"></script> 
    <script src="package/swiper2.js"></script>  

    <script src="jqurey/jquery-3.6.3.min.js"></script>
    <script src="jqurey/jqurey.js"></script>

    <script src="script/js2.js"></script>
    <script src="script/transparnt.js"></script>


    
</body>
</html>

<?php
//}
// else{
//     header('location:index.php');
//     exit();
// }


?>