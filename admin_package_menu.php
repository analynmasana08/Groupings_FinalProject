<?php
include('db_connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$id = mysqli_real_escape_string($db, $_POST['menu']);
	$sql="SELECT menu_package, price_per_head  FROM package_menus where id=$id";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_assoc($result);


	if($row)
	{
		$menu = $row['menu_package'];
		$price_per_head = $row['price_per_head'];
	}
	else {
		echo "No results!";
	}

	$code = mysqli_real_escape_string($db, $_POST['code']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
 	$address = mysqli_real_escape_string($db, $_POST['address']);
 	$contact = mysqli_real_escape_string($db, $_POST['contact_num']);
 	$other = mysqli_real_escape_string($db, $_POST['others']);
 	$num_person = mysqli_real_escape_string($db, $_POST['num_person']);
 	$totalprice = $num_person * $price_per_head;
	$date = mysqli_real_escape_string($db, $_POST['date']);
	$time = mysqli_real_escape_string($db, $_POST['time']);
 	$sql = "INSERT INTO package_menu_orders(code,name,menu,address,contact,other_menu,num_of_person,date_of_service,time_of_service,total_price) values ('$code','$name','$menu','$address', '$contact','$other','$num_person','$date','$time','$totalprice')";
 	$result = mysqli_query($db,$sql);

 	if(!$result){
 		echo '<script type="text/javascript">alert("!! Failed");</script>';
 	}
 	else{
 		header("Location: package_menus.php");
 	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Package Menu</title>
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
		<div class="side-panel"><br>
				<center><table border="1" width="96%" style="border-collapse: collapse;">
						<tr>
							<th class="menu_num">Menu Number</th>
							<th class="menu_name">Package menu</th>
							<th class="menu_price">Package Price/head</th>
							<th class="menu_price">ACTION</th>
						</tr>
						<?php
								$sql = "SELECT * FROM package_menus";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}
								else {
								while ($row=mysqli_fetch_assoc($result)) {
							?>
						<tr>
							<td class="td"><?=$row['id'];?></td>
							<td class="td"><?=$row['menu_package'];?></td>
							<td class="td"><?=$row['price_per_head'];?></td>
							<td class="td">
								<a href="edit_package_menu.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 25%;">Edit</button></a>
								<a href="delete_package_menu.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red;margin-left: 15%;">Delete</button></a>
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
			</div>
			<div class="content-panel">
				<div class="menu-content-panel1"><br>
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
								<a href="edit_packagemenu1.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 20%">EDIT</button></a>
								<a href="delete_packagemenu1.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Delete</button></a>
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
								<a href="edit_packagemenu2.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 20%">EDIT</button></a>
								<a href="delete_packagemenu2.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Delete</button></a>
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
								<a href="edit_packagemenu3.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue; margin-left: 20%">EDIT</button></a>
								<a href="delete_packagemenu3.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Delete</button></a>
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
</html>