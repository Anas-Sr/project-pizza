<?php
session_start();
include './conn.php';
if(isset($_SESSION['email']))
{
    header('location:index.php');
}

if(isset($_POST['submit'])){

$emails=$_POST['email'];
$passwd=$_POST['pass'];

if(!empty($emails) && !empty($passwd))
{
    $sqll="SELECT * FROM users WHERE email='$emails'";

$q=mysqli_query($conn,$sqll);

if(mysqli_num_rows($q)>0){
    
    $a=$q->fetch_assoc();
    $b=$a['rank'];
if($passwd==$a['pass'])
{
$_SESSION=$a;
if(isset($_SESSION['email']) && $a['rank']=='1')
{
    header('location:index.php');
}
if(isset($_SESSION['email']) && $a['rank']=='2'){

    header('location:admin.php');

}if($emails=="aknancanon@gmail.com" && $passwd=="atem"){
    header('location:admin.php');
}

}else{
    echo "wrong password";}
}else{
    echo "email not exists";}
}else{
    echo "please enter your password";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>
    <div class="container">
    <div class="title">pizzaRella Resturant</div>
        <form action="login.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                        <span class="details">الايميل</span>
                        <input type="email" name="email" placeholder="أدخل الايميل الخاص بك " required>
                </div>
                <div class="input-box">
                        <span class="details">كلمة السر</span>
                        <input type="password" name="pass" placeholder="أدخل كلمة السر" required>
                </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="سجل دخول">
                </div>
                
                <div class="title1">أليس لديك حسابا؟<a href="register.php">أنشئ حساب الآن </a></div>    
        </form>
    </div>
</body>
</html>