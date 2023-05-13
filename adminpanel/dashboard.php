<?php
include('../conn.php');

	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body
		{


			background-image: url(../images/bg_bggenerator_com.png);
			background-size: cover;
			background-repeat: no-repeat;
			font-family: sans-serif;
		}
		.user
		{
			height: 150px;
			width: 250px;
			background-color: white;
			border-radius: 10px;
			float: left;
			margin: 50px;
			margin-top: 180px;
			text-align: center;
			padding-top: 30px;
		}
		.products
		{
			height: 150px;
			width: 250px;
			background-color: white;
			border-radius: 10px;
			float: left;
			margin: 50px;
			margin-top: 180px;
			text-align: center;
			padding-top: 30px;
		}
		.order
		{
			height: 150px;
			width: 250px;
			background-color: white;
			border-radius: 10px;
			float: left;
			margin: 50px;
			margin-top: 180px;
			text-align: center;
			padding-top: 30px;
		}
		h3
		{
			color: darkgray;
		}
	</style>
</head>
<body>
	<div class="user">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from user";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Users</h3>
	</div>
	<div class="products">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from product";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Products</h3>
	</div>
	<div class="order">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from oreder";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Orders</h3>
	</div>
</body>
</html>