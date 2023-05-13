<?php
	session_start();

	if (!$_SESSION['adminuser']) 
	{
		header('location:adminlogin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="sidebar">
		
		<div class="profile">
			<img src="../images/admin.png">
		</div>
		<?php
                  if(isset($_SESSION['adminuser']))
                  {
          ?>
		<h2 align="center">Admin, <?php echo $_SESSION['adminuser']?></h2>
		<?php
			}
			else
			{
				?>
			<h2 align="center">Admin</h2>	
		<?php
			}
		?>

		<br><br>

		<h3 style="margin-left: 30px;"><a style="text-decoration: none; color: black;" href="dashboard.php" target="main-frame">Dashboard</a></h3>
		<h3 style="margin-left: 30px;"><a style="text-decoration: none; color: black;" href="user.php" target="main-frame">Users</a></h3>	
		<h3 style="margin-left: 30px;">Products   -</h3>
		<a id="sidebar-link" href="product.php" target="main-frame">All product</a>
		<br>
		<br>
		<a id="sidebar-link" href="add.php" target="main-frame">Add product</a>
		<i><h3 style="margin-left: 30px;"><a style="text-decoration: none; color: black;" href="order.php" target="main-frame">Orders</a></h3></i>
		<?php
                  if(isset($_SESSION['adminuser']))
                  {
          ?>
		<i><h3 style="margin-left: 30px;"><a style="text-decoration: none; color: black;" href="adminlogout.php">Logout</a></h3></i>
		<?php
			}
			else
			{
				?>
			<i><h3 style="margin-left: 30px;"><a style="text-decoration: none; color: black;" href="adminlogin.php">Login</a></h3></i>	
		<?php
			}
		?>
	</div>
	<div class="main-frame">
		<iframe src="dashboard.php" name="main-frame">frame</iframe>
	</div>
</body>
</html>