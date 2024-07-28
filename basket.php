<?php
session_start();
include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/basketstyle.css">
</head>
<body>
    <div class="heading">
        <h1>PizzaRella Resturant</h1>
        <h3>
            <?php
            $a = date("h");
            $b = $a +1;
            echo date("$b:i:s")."&ensp;"."&ensp;".
            date("Y-m-d")."&ensp;"."&ensp;"."&ensp;"."🛒سلة المشتريات";
            ?>
        </h3>
    </div>

    <div class="filter">

    </div>

    <table>
        <tr>
            <th>رقم المنتج</th>
            <th>اسم المنتج</th>
            <th>السعر</th>
            <th>#</th>
        </tr>

        <?php

            $num=1;
            $id=$_SESSION['id'];

            $sql="SELECT * FROM basket WHERE u_id='$id'";
            $query=mysqli_query($conn,$sql);

            while ($q=mysqli_fetch_assoc($query)) {
            $q1= $q['p_id'];

            $sql2="SELECT * FROM pizza WHERE id='$q1'";
            $query2=mysqli_query($conn,$sql2);

            while ($q2=mysqli_fetch_assoc($query2)){

        ?>

        <tr>
            <td><?php echo $num++; ?></td>
            <td><?php echo $q2['pname']; ?></td>
            <td><?php echo $q2['price'];?></td>
            <td><a href="prdell.php?id=<?php echo $q1;?>" onclick="return confirm('هل أنت متأكد؟')">
            <button class="button">ازالة المنتج من السلة</button></a></td>
        </tr>

        <?php
            }}
        ?>
        <a href="index.php"><button class="button1">الرجوع لصفحة المأكولات</button></a>
        <a href="index.php"><button class="button2">تأكيد عملية الشراء</button></a>
    </table>
    

</body>
</html>