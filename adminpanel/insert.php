<?php

	$con = mysqli_connect('localhost','root','','covictory');

	if (!$con) 
	{
		die("connection failed..");
	}

	$p_id = $_POST['p_id'];
	$p_name = $_POST['p_name'];
	$p_img = $_POST['p_img'];
	$p_img2 = $_POST['p_img2'];
	$p_img3 = $_POST['p_img3'];
	$p_desc = $_POST['p_desc'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$p_type = $_POST['p_type'];

	if ($p_type == "surgical") 
	{
		$type=2;
	}
	if ($p_type == "higenic") 
	{
		$type=3;
	}
	if ($p_type == "medicine") 
	{
		$type=1;
	}
	$q="insert into product(p_name,p_img,p_img2,p_img3,p_desc,price,quantity,p_type,type) values('$p_name','$p_img','$p_img2','$p_img3','$p_desc','$price','$quantity','$p_type',$type)";

	$result = mysqli_query($con,$q);

	if($result)
	{
		header("location:product.php");
	}
	else
	{
		echo "not inserted successfully";
	}
?>