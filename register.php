<?php
session_start();
include './conn.php';

if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $email=$_POST['uemail'];
    $pass=$_POST['upass'];
    $city=$_POST['ucity'];
    $phone=$_POST['uphone'];

    $sql="INSERT INTO users(uname,pass,email,addres,phone,rank)
    VALUES('$name','$pass','$email','$city','$phone',1)";
    
    if(empty($name)){
    echo "please enter your name " . "<br>";
    }
    elseif (empty($email)){
    echo "please enter your email" . "<br>";
    }
    elseif (filter_var($email,FILTER_VALIDATE_EMAIL)==false){
    echo "the email is useless";
    }
    
    $qsl="SELECT email FROM users WHERE email='$email'";
    $q=$conn->prepare($qsl);
    $q->execute();
    $a=$q->fetch();

    if($a){
    echo"the email is usless";
        }
        
        elseif(!empty($pass)){
            
            if (strlen($pass)<6){
            echo "the password must'nt lower than 6 characters" . "<br>";
            }

            if(mysqli_query($conn,$sql)){
                    $_SESSION=$a;
                    header('location:login.php');

            }else{
            echo 'error:'.mysqli_error($conn);}
        }else{
        echo "please enter your password" . "<br>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>انشاء حساب جديد</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerstyle.css">
</head>
<body>
    <div class="container">
        <div class="title">pizzaRella Resturant</div>
            <form action="register.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">الاسم الكامل</span>
                        <input type="text" name="uname" placeholder="أدخل اسمك الكامل" required>
                    </div>
                    <div class="input-box">
                        <span class="details">الايميل</span>
                        <input type="email" name="uemail" placeholder="أدخل الايميل الخاص بك " required>
                    </div>
                    <div class="input-box">
                        <span class="details">كلمة السر</span>
                        <input type="password" name="upass" placeholder="أدخل كلمة السر" required>
                    </div>
                    <div class="input-box">
                        <span class="details">العنوان</span>
                        <input type="text" name="ucity" placeholder="أدخل المحافظة او المنطقة" required>
                    </div>
                    <div class="input-box">
                        <span class="details">قم بكتابة عبارة تساعدك على تذكر كلمة السر  </span>
                        <input type="text" placeholder="عبارة أو كلمة مميزة" required>
                    </div>
                    <div class="input-box">
                        <span class="details">رقم الهاتف</span>
                        <input type="tel" name="uphone" placeholder="+963 9 يجب أن يبدأ ب " required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="أنشئ حساب">
                </div>
                <div class="title1">هل لديك حساب بالفعل؟<a href="login.php">تسجيل دخول</a></div>
                <div class="title2">العودة<a href="home.php">للصفحة الرئيسية</a></div>     
            </form>
    </div>
</body>
</html>