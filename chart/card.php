
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../style/chart.css">
    <link rel="stylesheet" href="../style/home1.css">
    <link rel="stylesheet" href="../style/About.css">


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ميزو كار لسلة الشراء و التاجير</title>

    <link rel="stylesheet" href="../font/goole-font.css">

    <link rel="icon"  href="../image/Mizoo.png">
    <link rel="shortcut"  href="../image/Mizoo.png">
    <link rel="apple-touch-icon"  href="../image/Mizoo.png">

</head>
<body class="back ">


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
                        <th scope='col'>نوع العملية</th>
                        <th scope='col'>حذف السيارة</th>
                    </tr>
                </thead>
  <?php
      include('../inc/config.php');
      $result = mysqli_query($con, "SELECT * FROM chart");
      while($row = mysqli_fetch_array($result)){
        if($row['typebrand'] === 'معروض للبيع'){
        echo " 

            

                <tbody>
                    <tr>
                        <th>$row[Carbrand]</th>
                        <th>$$row[price]</th>
                        <th>$row[typebrand]</th>
                        <th><a href='del_card.php? id=$row[id]'>ازالة</a></th>
                    </tr>
                </tbody>  
            
             ";
            
        }
    }

   ?>
   </table>
   </div>
</div>


<div class="chart-App back-color">
   <div class='main' >

   <table class='content-table'>
                <thead>
                    <tr>
                        <th scope='col'>ماركة السيارة</th>
                        <th scope='col'>تاريخ السيارة</th>
                        <th scope='col'>نوع العملية</th>
                        <th scope='col'>حذف السيارة</th>
                    </tr>
                </thead>
  <?php
      include('../inc/config.php');
      $result = mysqli_query($con, "SELECT * FROM rent");
      while($row = mysqli_fetch_array($result)){
       if($row['typebrand'] === 'معروض لايجار'){

            echo "

                    <tbody>
                        <tr>
                            <th>$row[Carbrand]</th>
                            <th>$row[thedate]</th>
                            <th>$row[typebrand]</th>
                            <th><a href='del_card2.php? id=$row[id]'>ازالة</a></th>
                        </tr>
                    </tbody>     
        
                 ";
    
        }
    }

   ?>
   </table>
   </div>
</div>


<script src="../script/transparnt.js"></script>


</body>
</html>