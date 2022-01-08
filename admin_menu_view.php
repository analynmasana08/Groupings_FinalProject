<?php
include('db_connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
		$id = mysqli_real_escape_string($db, $_POST['beef']);
		$sql="SELECT menu_name, price FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$beef = $row['menu_name'];
				$beefprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['chicken']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$chicken = $row['menu_name'];
				$chickenprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['fish']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$fish = $row['menu_name'];
				$fishprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['pasta']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$pasta = $row['menu_name'];
				$pastaprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['pork']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$pork = $row['menu_name'];
				$porkprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['pancit']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$pancit = $row['menu_name'];
				$pancitprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['veges']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$veges = $row['menu_name'];
				$vegesprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['seafoods']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$seafoods = $row['menu_name'];
				$seafoodsprice = $row['price'];
			}

		else {
			echo "No results!";
			}

		$id = mysqli_real_escape_string($db, $_POST['desserts']);
		$sql="SELECT menu_name, price  FROM menus where id=$id";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_assoc($result);


		if($row)
			{
				$dessert = $row['menu_name'];
				$dessertprice = $row['price'];
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
 	$totalprice = $num_person * ($beefprice + $chickenprice + $fishprice + $porkprice + $pastaprice + $pancitprice + $vegesprice + $seafoodsprice + $dessertprice + $chickenprice);
	$date = mysqli_real_escape_string($db, $_POST['date']);
	$time = mysqli_real_escape_string($db, $_POST['time']);
 	$sql = "INSERT INTO orders(code,beef,chicken,fish,pasta,pork,pancit,veges,seafoods,desserts,name,address,contact,other_menu,num_of_person,date_of_service,time_of_service,total_price) values ('$code','$beef', '$chicken','$fish', '$pasta','$pork','$pancit','$veges','$seafoods','$dessert','$name','$address', '$contact','$other','$num_person','$date','$time','$totalprice')";
 	$result = mysqli_query($db,$sql);

 	if(!$result){
 		echo '<script type="text/javascript">alert("!! Failed");</script>';
 	}
 	else{
 		header("Location: custom_menu.php");
 	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ATHELO'S CATERING SERVICE</title>
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
			<div class="content-panel" style="width: 98.5%;"><br>
				Choose your menu here. . . <br><br>
				<div class="menu-content-panel">
					<center><table border="1" width="96%">
						<tr>
							<th class="menu_num">Menu Number</th>
							<th class="menu_name">Menu Name</th>
							<th class="menu_price">Menu Price</th>
							<th class="menu_price">ACTION</th>
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
							<td class="td">
								<a href="edit_menu.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: blue">Edit</button></a>
								<a href="delete_menu.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Delete</button></a>
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
			</div>
	</div>
</body>