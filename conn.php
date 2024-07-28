<?php
    $conn=mysqli_connect('localhost','root','','project_pizza');
    if(!$conn){
        echo 'error:'.mysqli_connect_error($conn);
    }
?>