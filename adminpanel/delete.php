<?php

session_start();

$delete_id = $_POST['product_id'];

$con = mysqli_connect('localhost','root','','covictory');

$q= "delete from product where p_id = $delete_id";

$result = mysqli_query($con,$q);

mysqli_close($con);

header("location:product.php");
 
?>