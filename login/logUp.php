<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشاء حساب لموقع ميزو كار</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../font/goole-font.css">
    <link rel="stylesheet" href="../style/form.css">

    <link rel="icon"  href="../image/Mizoo.png">
    <link rel="shortcut"  href="../image/Mizoo.png">
    <link rel="apple-touch-icon"  href="../image/Mizoo.png">

</head>


<body>
    <div class="body">

        <form action="register_post.php" method="post"  id="formTwo" class="form-item form-item-two">


            <div class="logn">
                <h1> انشاء  <span class="span2"> حساب </span> </h1>
            </div>

            
            <div class="papaApp">

                
                <div class="papa" >
                    <label for="email"><b>الاسم الاول</b></label>
                    <input id="usernameFirst" autocapitalize="off" type="text" placeholder="الاسم الاول" name="username"  >
                    <?php  if(isset($user_error)){
                   echo $user_error;
                }  ?>
                </div>


                

                <div class="papa">
                    <label for="email"><b>الايميل</b></label>
                    <input type="email" placeholder="ادخل الايميل" name="email" class="nmm">
                    <?php  if(isset($email_error)){
                        echo $email_error;
                    }   ?>
                </div>
            </div>

            <div class="papaApp">
                <div class="papa" >
                    <label for=""><b>العنوان</b></label>
                    <input type="text" placeholder="العنوان" name="address"  >
                </div>

                <div class="papa">
                    <label for=""><b>رقم التليفون</b></label>
                    <input type="number" placeholder="رقم التليفون" name="phone"  >
                </div>
            </div>

            <div class="flex">

                
                <div class="papa">
                    <label  for="password"><b>كلمة السر</b></label>
                    <input  type="password" name="password" placeholder="ادخل كلمة السر" class="password passwordone" >
                    <?php  if(isset($pass_error)){
                       echo $pass_error;
                    }  ?>
                    <i class="fa-solid fa-eye-slash pas pas-icon"></i>
                    <p class="papa-paragr">لرجاء إدخال 8 أحرف على الأقل مع رقم ورمز وكبير وحرف صغير</p>
                </div>
    
                <div class="papa">
                    <label for="password"><b> تأكيد كلمة السر</b></label>
                    <input  type="password" name="password2" placeholder="تأكيد كلمة السر" class="password passwordTwo" >
                    <i class="fa-solid fa-eye-slash pas pas-icon"></i>
                    <p class="papa-paragr2" >  كلمة السر لا تتطابق</p>
                </div>
            </div>

            <button type="submit" name="submit" disabled class="btn-logn lll" >انشاء حساب</button>

            <div class="Create">
                <p>لديك حساب بالفعل؟</p>
                <a href="login.php" class="Create-Account"> تسجيل الدخول</a>
            </div>
          
            <div class="line"></div>

            <div class="flex1">
            <div class="media-options">
                <a href="#" >
                    <i class="fa-brands fa-facebook"></i>
                    <span>تسجيل الدخول عبر الفيسبوك</span>
                </a>
            </div>
            <div class="media-options Google">
                <a href="#" >
                    <i class="fa-brands fa-google"></i>
                    <span >تسجيل الدخول عبر جوجل</span>
                </a>
            </div>
            </div> 
        </form>
    </div>


    <script src="../script/formUp.js"></script>

</body>
</html>