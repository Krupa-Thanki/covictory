
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

	$q= "select * from product";

	$result = mysqli_query($con,$q);

	if (mysqli_num_rows($result)>0) 
	{
		echo "<table>";
		echo "<tr>";
		echo "<th></th>";
		echo "<th></th>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>Image 1</th>";
		echo "<th>Image 2</th>";
		echo "<th>Image 3</th>";
		echo "<th>Description</th>";
		echo "<th>Price</th>";
		echo "<th>Quantity</th>";
		echo "<th>Product type</th>";

		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
		?>
			<form action="delete.php" method="post">
				<input type="hidden" name="product_id" value="<?php echo $row['p_id']; ?>">
				<td>
					<input type="submit" name="btn_delete" class="btn" value="DELETE" style="background-color: #000080;" />
				</td>
			</form>
			<form action="edit.php" method="post">
				<input type="hidden" name="product_id" value="<?php echo $row['p_id']; ?>">
				<td>
					<input type="submit" name="btn_edit" class="btn" value="EDIT" style="background-color: #3944BC;"/>
				</td>
			</form>
		<?php
			echo "<td>".$row["p_id"]."</td>";
			echo "<td>".$row["p_name"]."</td>";
			echo "<td><img name='img-nm' style='object-fit: contain;' src='../images/".$row["p_img"]."'></td>";
			echo "<td><img style='object-fit: contain;' src='../images/".$row["p_img2"]."'></td>";
			echo "<td><img style='object-fit: contain;' src='../images/".$row["p_img3"]."'></td>";
			echo "<td><div class='scroll'>".$row["p_desc"]."</div></td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["quantity"]."</td>";
			echo "<td>".$row["p_type"]."</td>";
		}
	}

	mysqli_close($con);
?>

</body>
</html>