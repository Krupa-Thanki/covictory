<?php

session_start();

$delete_id = $_POST['id'];

$con = mysqli_connect('localhost','root','','covictory');

$q= "delete from user where u_id = $delete_id";

$result = mysqli_query($con,$q);

mysqli_close($con);

header("location:user.php");
 
?>