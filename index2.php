<?php
session_start();
include 'conn.php';

$id_p=$_SESSION['id'];
$id=$_GET['id'];

$sql="INSERT INTO basket (u_id,p_id) VALUES ('$id_p','$id')";
$query=mysqli_query($conn,$sql);

if($query){
    header('location:index.php');
}

?>