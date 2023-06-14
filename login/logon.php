 <?php
session_start();
include('../inc/config.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = stripcslashes(htmlspecialchars(strtolower($_POST['username'])));
    $password = stripcslashes(htmlspecialchars($_POST['password']));
    $md5_pass  = md5($password);


if(empty($username)){
    $user_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> الرجاء إدخال اسم المستخدم <p>';
    $err_s = 1 ;
}
if(empty($password)){
    $pass_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> الرجاء إدخال كلمة المرور <p>';
    $err_s = 1 ;
    include_once('login.php');
}

if(!isset($err_s)){
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND md5_pass ='$md5_pass' limit 1";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);
    if($num_rows != 0){
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] =$row['id'];
        header('location:../index.php');
        exit();
    }
    else{
        $usertwo_error = '<p style="color:red;font-size: 16px;font-weight: bold;text-align:center;">! woring username or password <p>';
        include('login.php');
        exit();
   }
}
}



?> 