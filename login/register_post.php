<?php

include('../inc/config.php');

if(isset($_POST['submit'])){
    $username = stripcslashes(strtolower($_POST['username']));
    $email = stripcslashes($_POST['email']);
    $address = stripcslashes($_POST['address']);
    $phone = stripcslashes($_POST['phone']);
    $password = stripcslashes($_POST['password']);

    $username   = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
    $email      = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $address    = htmlentities(mysqli_real_escape_string($con,$_POST['address']));
    $phone      = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
    $password   = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
    $md5_pass   = md5($password);


    $check_user = "SELECT * FROM `users` WHERE username='$username'";
    $check_result = mysqli_query($con,$check_user);
    $num_rows = mysqli_num_rows($check_result);
    if($num_rows != 0){
        $user_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> آسف اسم المستخدم موجود بالفعل ، قم بتغيير اسم مستخدم آخر<p> ';
        $err_s = 1 ;
    }




    if(empty($username)){
        $user_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> الرجاء إدخال اسم المستخدم <p>';
        $err_s = 1 ;
    }elseif(strlen($username) < 6){
        $user_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> يجب ألا يقل اسم المستخدم عن 6 أحرف <p>';
        $err_s = 1 ;
    }
    elseif (filter_var($username,FILTER_VALIDATE_INT)) {
        $user_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> الرجاء إدخال اسم مستخدم صالح وليس رقمًا <p>';
        $err_s = 1 ;
    }

    if(empty($email)){
        $email_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> الرجاء إدخال البريد الإلكتروني <p>';
        $err_s = 1 ;
    }
    elseif (filter_var($username,FILTER_VALIDATE_EMAIL)) {
        $email_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> من فضلك بريد إلكتروني صحيح <p>';
        $err_s = 1 ;
    }
    if(empty($password)){
        $pass_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> الرجاء إدخال كلمة المرور <p>';
        $err_s = 1 ;
        include('logUp.php');
    }elseif (strlen($password) < 8) {
        $email_error = '<p style="color:red;font-size: 12px;font-weight: bold;"> يجب ألا تقل كلمة المرور الخاصة بك عن 8 أحرف <p>';
        $err_s = 1 ;
        include('logUp.php');
    }
    else {
        if (($err_s == 0) && ($num_rows == 0)){
            $sql = "INSERT INTO users(username,email,address,phone,password,md5_pass) 
            VALUES ('$username','$email','$address','$phone','$password' ,'$md5_pass')";
            mysqli_query($con,$sql);
            header('location:login.php');
        }else{
            include('logUp.php');
        }
    }
}



?>