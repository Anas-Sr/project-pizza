<?php
    session_start();
    include './conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
    <div class="menu">
        <div class="heading">
            
            <h1>PizzaRella Resturant</h1>
            <h3> قائمة المأكولات والمشروبات </h3>
            <button class="b"><a href="logout.php">تسجيل الخروج</a> </button>
        </div>

        <div class="food-item">
            <img src="images of pizza/habash.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='1'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='1'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>
                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                            <!--  -->
        <div class="food-item">
            <img src="images of pizza/mix.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='2'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='2'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        تشكيلة واسعة وجميلة لألذ المكونات على الاطلاق في 
                        طبق واحد
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                        <!--  -->
        <div class="food-item">
            <img src="images of pizza/mrgritta.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='3'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='3'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        أحد أقوى و أفضل تشكيلات القوية في مطبخ البيتزا 
                        والمعروف عالميا باسم مرغريتا 
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                            <!--  -->
        <div class="food-item">
            <img src="images of pizza/parpiq.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='4'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='4'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                            <!--  -->
        <div class="food-item">
            <img src="images of pizza/piproni.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='5'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='5'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                        <!--  -->
        <div class="food-item">
            <img src="images of pizza/suprem.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='6'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='6'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
    </div>
<!--                                         -->
    <div class="menu">
    <div class="food-item">
            <img src="images of pizza/potato.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='7'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='7'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                            <!--  -->
        <div class="food-item">
            <img src="images of pizza/7up.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='8'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='8'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        تشكيلة واسعة وجميلة لألذ المكونات على الاطلاق في 
                        طبق واحد
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                        <!--  -->
        <div class="food-item">
            <img src="images of pizza/koka.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='9'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='9'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        أحد أقوى و أفضل تشكيلات القوية في مطبخ البيتزا 
                        والمعروف عالميا باسم مرغريتا 
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                            <!--  -->
        <div class="food-item">
            <img src="images of pizza/orange.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='10'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='10'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                            <!--  -->
        <div class="food-item">
            <img src="images of pizza/pepsi.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='11'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='11'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
                        <!--  -->
        <div class="food-item">
            <img src="images of pizza/vinito.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h2>
                        <?php
                            $sql="SELECT * FROM pizza WHERE id='12'";
                            $query=mysqli_query($conn,$sql);
                            $p=mysqli_fetch_assoc($query);
                            echo $p1=$p['pname'];
                        ?>
                    </h2>

                    <h2 class="price">
                        <?php
                            $sql1="SELECT * FROM pizza WHERE id='12'";
                            $query1=mysqli_query($conn,$sql1);
                            $p=mysqli_fetch_assoc($query1);
                            $id=$p['id'];
                            echo $p1=$p['price'].'sp';
                        ?>
                    </h2>
                </div>
                    <p>
                        من أشهى و أجود أنواع اللحوم نقدم لكم وبكل فخر
                        أطيب منتجاتنا بيتزا الحبش المدخن
                    </p>

                    <button><a href="index2.php?id=<?php echo $id;?>" onclick="return confirm('هل أنت متأكد من اضافة المنتج للسلة؟')">
                    اضافة الى السلة</a></button>

            </div>
        </div>
</div>
        <center>
        <a href="home.php"><button class="drunk">الرجوع للصفحة الرئيسية</button></a>
        <a href="basket.php"><button class="drunk"> 🛒تفقد سلة المشتريات</button></a>
        </center>
        <br>
        <br>
</body>
</html>