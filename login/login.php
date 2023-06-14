<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول لموقع ميزو كار</title>

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

 

        <form action="logon.php" method="post" id="form" class="form-item" >
    
        <div class="logn">
            <h1 >تسجيل <span class="span2" >الدخول </span> </h1>
        </div>
        <!-- id="email" -->

        <?php  if(isset($usertwo_error)){
                   echo $usertwo_error;
        }  ?>

        <div class="papa">
            <label  for="email" ><b>اسم المستخدم</b></label>
            <input  type="username" placeholder="ادخل الاسم" name="username"  >
            <?php  if(isset($user_error)){
                   echo $user_error;
            }  ?>
        </div>
    
        <div class="papa">
            <label  for="password"><b>كلمة السر</b></label>
            <input type="password" name="password" placeholder="ادخل كلمة السر" class="password passwordlogn">
            <?php  if(isset($pass_error)){
                echo $pass_error;
            }  ?>
            <i class="fa-solid fa-eye-slash pas1"></i>
            <p class="password-Farget" >نسيت كلمة السر <a href="#">انقر هنا</a> </p>
        </div>
        
        <button type="submit" name="reed" class="btn-logn" >تسجيل</button>
    
        <span class="Create">
            <p>ليس لديك حساب؟</p>
            <a href="logUp.php" class="Create-Account">إنشاء حساب</a>
        </span>
    
        </form>

        
   
</div>



<script src="../script/formIn.js"></script>


</body>
</html>