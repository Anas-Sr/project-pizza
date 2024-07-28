<?php
    include 'conn.php';
    session_start();
    $sql = "DELETE  FROM basket";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('location:index.php');
    }
?>