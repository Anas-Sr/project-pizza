<?php
session_start();
include 'conn.php';

$s=$_GET['id'];

$sql="DELETE FROM basket WHERE p_id='$s'";
$query=mysqli_query($conn,$sql);

if($query){
    header('location:basket.php');
}
else{
    echo 'error:'. mysqli_error($query);
}
?>