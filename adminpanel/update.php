<?php	
	$con = mysqli_connect('localhost','root','','covictory');

	if (!$con) 
	{
		die("connection failed..");
	}

if (isset($_POST['edit']))
{
	$p_id = $_POST['id'];
	$p_name = $_POST['p_name'];
	$p_img = $_POST['p_img'];
	$p_img2 = $_POST['p_img2'];
	$p_img3 = $_POST['p_img3'];
	$p_desc = $_POST['p_desc'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$p_type = $_POST['p_type'];

	$query = "update product set p_name='$p_name',p_img='$p_img',p_img2='$p_img2',p_img3='$p_img3',p_desc='$p_desc',price='$price',quantity='$quantity',p_type='$p_type' where p_id='$p_id'";

	$result = mysqli_query($con,$query);
}

	if(!$result) 
	{
		header('location:product.php');
	}
	
	if($result) 
	{
		header('location:product.php');
	}

	mysqli_close($con);
?>