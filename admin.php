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
    <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
<div class="heading">
        <h1>PizzaRella Resturant</h1>
        <h3>
            <?php
            echo date("h:i:s")."&ensp;"."&ensp;".
            date("Y-m-d")."&ensp;"."&ensp;"."&ensp;"."الطلبات الجديدة";
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
        </tr>

        <?php

            $num=1;

            $sql="SELECT * FROM basket";
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
        </tr>

        <?php
            }}
        ?>
        </table>
<div class="font">
    اسم مقدم الطلب:
    <?php
    $sql="SELECT * FROM basket";
    $query=mysqli_query($conn,$sql);
    
    while($fetch=mysqli_fetch_assoc($query)){
        $f=$fetch['u_id'];

    $sql2="SELECT * FROM users WHERE id='$f'";
    $query2=mysqli_query($conn,$sql2);

    $name=mysqli_fetch_assoc($query2);
    }
    echo $n=$name['uname'];
    ?>
</div>

<div class="font1">
    العنوان:
    <?php
    $sql="SELECT * FROM basket";
    $query=mysqli_query($conn,$sql);
    
    while($fetch=mysqli_fetch_assoc($query)){
        $f=$fetch['u_id'];

    $sql2="SELECT * FROM users WHERE id='$f'";
    $query2=mysqli_query($conn,$sql2);

    $name=mysqli_fetch_assoc($query2);
    }
    echo $n=$name['addres'];
    ?>
</div>

<div class="font3">

    السعر بعد فرض الضرائب و أجور التوصيل:
    <input type="text" class="in" 
    value="">
    <br><br><br>
    <button class="bf"><a href="done.php">تمت القراءة </a></button>
</div>
</body>
</html>