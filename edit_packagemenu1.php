<?php
include('db_connect.php');
if (isset($_POST['id'])) 
{
	$id          = $_POST['id'];
	$menu          = $_POST['menu'];
		
	$sql = "UPDATE package_menu1 SET id='$id',food_name='$menu' WHERE id='$id'";
	if(mysqli_query($db,$sql)) {
			header('location:admin_package_menu.php');
		}
		else{
			mysqli_error($db);
		}
}
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql="SELECT * FROM package_menu1 WHERE id=$id";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_assoc($result);

	if($row)
		{
		$id     = $row['id'];
		$menu   = $row['food_name'];
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
					Edit Package menu 1. . . <br>
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
						</table>
					</div>
					<div class="lgn-btn1">
			            <button type="submit" class="btn btn-primary btn-lg  btn-block" tabindex="8">
			                 Submit
			            </button>
		            </div>
		            
				</form>
			</div>
			<div class="content-panel">
				<div class="menu-content-panel1">
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package menu 01</b>
					<center><table border="1" width="50%">
						<tr>
							<th class="menu_num">Menu 01</th>
							<th class="menu_num">ACTION</th>
						</tr>
						<?php
								$sql = "SELECT * FROM package_menu1";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}
								else {
								while ($row=mysqli_fetch_assoc($result)) {
							?>
						<tr>
							<td class="td"><?=$row['food_name'];?></td>
							<td class="td">
								<a href="edit_package_menu1.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 20%">EDIT</button></a>
								<a href="delete_packagemenu1.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Cancel</button></a>
							</td>
						</tr>
						<?php
								}
							?>
					</table>
				</center>
					<?php
						}
					?>
					<br><br><br>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package menu 02</b>
					<center><table border="1" width="50%">
						<tr>
							<th class="menu_num">Menu 02</th>
							<th class="menu_num">ACTION</th>
						</tr>
						<?php
								$sql = "SELECT * FROM package_menu2";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}
								else {
								while ($row=mysqli_fetch_assoc($result)) {
							?>
						<tr>
							<td class="td"><?=$row['food_name'];?></td>
							<td class="td">
								<a href="edit_package_menu2.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 20%">EDIT</button></a>
								<a href="delete_packagemenu2.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Cancel</button></a>
							</td>
						</tr>
						<?php
								}
							?>
					</table>
				</center>
					<?php
						}
					?>
					<br><br><br>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package menu 03</b>
					<center><table border="1" width="50%">
						<tr>
							<th class="menu_num">Menu 03</th>
							<th class="menu_num">ACTION</th>
						</tr>
						<?php
								$sql = "SELECT * FROM package_menu3";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}
								else {
								while ($row=mysqli_fetch_assoc($result)) {
							?>
						<tr>
							<td class="td"><?=$row['food_name'];?></td>
							<td class="td">
								<a href="edit_package_menu3.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 20%">EDIT</button></a>
								<a href="delete_packagemenu3.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Cancel</button></a>
							</td>
						</tr>
						<?php
								}
							?>
					</table>
				</center>
					<?php
						}
					?>
					<br><br><br>
					
					
				</div>
			</div>
	</div>
</body>