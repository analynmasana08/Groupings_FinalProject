<?php
include('db_connect.php');
if (isset($_POST['id'])) 
{
	$id          = $_POST['id'];
	$menu          = $_POST['menu'];
	$price        = $_POST['price'];
		
	$sql = "UPDATE menus SET id='$id',menu_name='$menu',price='$price' WHERE id='$id'";
	if(mysqli_query($db,$sql)) {
			header('location:admin_menu_view.php');
		}
		else{
			mysqli_error($db);
		}
}

if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql="SELECT * FROM menus WHERE id=$id";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_assoc($result);


	if($row)
		{
			
			$id          = $row['id'];
			$menu          = $row['menu_name'];
			$price          = $row['price'];
		}

	else {
		echo "No results!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>JBC Videoke, Tables and Chairs Rentals</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="body">
		<div class="header">
			ATHELO'S CATERING SERVICE - Administrator
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="admin_page.php"><button>Back</button></a>
				<a href="admin_login.php"><button>Log Out</button></a>
			</div>
		</div>
			<div class="side-panel">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					Edit menu. . . <br>
					<div class="option">
						<table border="0" width="100%">
							<tr>
								<td>
									<input type="hidden" name="id" value="<?php echo $id; ?>">
								</td>
							</tr>
							<tr>
								<th>Menu</th>
								<td>
									<input type="text" name="menu" value="<?php echo $menu; ?>">
								</td>
							</tr>
							<tr>
								<th>Price</th>
								<td>
									<input type="text" name="price" value="<?php echo $price; ?>">
								</td>
							</tr>
						</table>
					</div>
					<div class="lgn-btn1">
			            <button type="submit" class="btn btn-primary btn-lg  btn-block" tabindex="8">
			                 Submit
			            </button>
		            </div>
		            
				</form>
			</div>
			<div class="content-panel"><br>
				Choose your menu here. . . <br><br>
				<div class="menu-content-panel">
					<center><table border="1" width="96%">
						<tr>
							<th class="menu_num">Menu Number</th>
							<th class="menu_name">Menu Name</th>
							<th class="menu_price">Menu Price</th>
						</tr>
						<?php
								$sql = "SELECT * FROM menus";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}
								else {
								while ($row=mysqli_fetch_assoc($result)) {
							?>
						<tr>
							<td class="td"><?=$row['id'];?></td>
							<td class="td"><?=$row['menu_name'];?></td>
							<td class="td"><?=$row['price'];?></td>
						</tr>
						<?php
								}
							?>
					</table>
				</center>
					<?php
						}
					?>
				</div>
			</div>
	</div>
</body>