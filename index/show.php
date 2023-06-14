 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ميزوو كار للتفاصيل السيارة</title>

   <link rel="stylesheet" href="../package/swiper-bundle.min.css">
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






        <!-- Start Box Car Details -->
        <?php

include('../inc/config.php');

$id = $_GET['id'];

$up = mysqli_query($con , "select * from car where id =$id");

$data = mysqli_fetch_array($up);

?> 

  <div class="Car-App back">

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
                <!-- Button Nav Bar -->
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars back-color"></i>
                </button>
            </div>
    </header>
    <!-- End Header -->



     <div class="Car-item back-content">

        <div class="Car-App-item">
                <!-- Srart Cars Image -->
            <div class="Carfd" style="height: 81%;"> 
                <div class="swiper FF">
                    <div class="swiper-sl">
                        <div class="swiper-wrapper swiper-wrappercc">
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image2'] ?>)" ></div>
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image3'] ?>)" ></div>
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image4'] ?>)" ></div>
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image5'] ?>)" ></div>
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image6'] ?>)" ></div>
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image7'] ?>)" ></div>
                            <div class="swiper-slide cc" style=" background-image:url(../Data-entry/<?php echo $data['image8'] ?>)" ></div>
                            <!-- <div class="swiper-slide cc" style=" background-image:url(<?php echo $data['image9'] ?>)" ></div> -->
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
                <!-- End Cars Image -->
    
                <!-- Srart Cars Details -->
             <div class="Car-App-item-title back-color">
                <div class="title-Car">
                        <div class="title-flex">
                            <h1><?php echo $data['price'] ?> ج.م</h1>
                            <p>بي ام موديل <?php echo $data['model'] ?></p>
                        </div>
                        <div class="title-flex">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                القاهرة / المنصورة
                            </div>
                            <!-- <p><?php echo $data['thedate'] ?></p> -->
                        </div>
                </div>
                 <ul>
                        <li>
                            <span>الماركة</span>
                            <span class="flexSpan">
                                <p><?php echo $data['Carbrand'] ?></p>
                                <img src="../image/klipartz.com.png" alt="">
                            </span>
                        </li>
                        <li>
                            <span>نوع العملية</span>
                            <span><?php echo $data['typebrand'] ?></span>
                        </li>
                        <li>
                            <span>نوع الوقود</span>
                            <span><?php echo $data['FuelType'] ?></span>
                        </li>
                        <!-- <li>
                            <span>طريقة الدفع</span>
                            <span><?php echo $data['payment'] ?></span>
                        </li> -->
                        <li>
                            <span>موديل</span>
                            <span><?php echo $data['model'] ?></span>
                        </li>
                        <li>
                            <span>كيلومترات</span>
                            <span>اكثر من <?php echo $data['Mileage'] ?></span>
                        </li>
                        <li>
                            <span>ناقل الحركة</span>
                            <span><?php echo $data['Transmission'] ?></span>
                        </li>
                        <li>
                            <span>الحالة</span>
                            <span><?php echo $data['condition'] ?></span>
                        </li>
                        <li>
                            <span>اللون</span>
                            <span><?php echo $data['Carcolorr'] ?></span>
                        </li>
                        <li>
                            <span>نوع الهيكل</span>
                            <span><?php echo $data['Bodywork'] ?></span>
                        </li>
                        <li>
                            <span>المحرك[سي سي]</span>
                            <span><?php echo $data['EngineSize'] ?></span>
                        </li>
                        <li>
                            <span>فيديو</span>
                            <span><?php echo $data['car_video'] ?></span>
                        </li>
                        <li>
                            <span>جولة افتراضية</span>
                            <span><?php echo $data['virtual_tour'] ?></span>
                        </li>
                        <li class="flexSpanclo">
                            <p>وصف</p>
                            <p><?php echo $data['aboutCar'] ?></p>
                        </li>
                </ul>
                <div class="title-button-flex">
                    <button>
                        <i class="fa-regular fa-comment-dots"></i>
                        المحادثة
                    </button>
                    <button>
                        <i class="fa-solid fa-phone"></i>
                        مكالمة
                    </button>
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                        رسالة نصية
                    </button>
                </div>
            </div>
                <!-- End Cars Details -->
        </div>
                
            <!-- Start Cars the Same Brands -->
    <div class="Car-App-item-two">
        <?php
             include('../inc/config.php');

             $result = mysqli_query($con, "SELECT * FROM car");
             while($row = mysqli_fetch_array($result)){

                if($row['Carbrand'] === $data['Carbrand']){
                        echo  "
                        <div class='Car-flex'>
                            <div class='Car-flex-img'>
                                <img class='Car-flex-img-item' src='../Data-entry/$row[image]' alt=''>
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
              
    </div>
            <!-- End Cars the Same Brands -->      

    </div>





 </div>
   




    <script src="../package/swiper-bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
    <script src="../package/swiper.js"></script> 
    <script src="../package/swiper2.js"></script>  
    <script src="../script/transparnt.js"></script>

 </body>
 </html>
 
 
 
 
