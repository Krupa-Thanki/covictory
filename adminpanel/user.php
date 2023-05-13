
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

	$q= "select * from user";

	$result = mysqli_query($con,$q);

	if (mysqli_num_rows($result)>0) 
	{
		echo "<table>";
		echo "<tr>";
		echo "<th></th>";
		echo "<th>ID</th>";
		echo "<th>First name</th>";
		echo "<th>Last name</th>";
		echo "<th>Email</th>";
		echo "<th>Password</th>";

		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
			?>
		<form action="deleteuser.php" method="post">
				<input type="hidden" name="id" value="<?php echo $row['u_id']; ?>">
				<td>
					<input type="submit" name="btn_delete" class="btn" value="DELETE" style="background-color: #000080;" />
				</td>
			</form>
<?php
			echo "<td>".$row["u_id"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["password"]."</td>";
		}
	}

	mysqli_close($con);
?>

</body>
</html>