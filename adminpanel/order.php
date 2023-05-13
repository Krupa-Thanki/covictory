
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="../images/bg_bggenerator_com.png">
<?php

	$con = mysqli_connect('localhost','root','','covictory');

	if (!$con) 
	{
		die("connection failed..");
	}

	$q= "select * from oreder";

	$result = mysqli_query($con,$q);

	if (mysqli_num_rows($result)>0) 
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Product Name</th>";
		echo "<th>Price</th>";
		echo "<th>Date</th>";

		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
			echo "<td>".$row["o_id"]."</td>";
			echo "<td>".$row["product_nm"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["dt"]."</td>";
		}
	}

	mysqli_close($con);
?>

</body>
</html>