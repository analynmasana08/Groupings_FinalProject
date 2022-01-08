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
 	$num_person = mysqli_real_escape_string($db, $_POST['num_person']);
 	$totalprice = $num_person * ($beefprice + $chickenprice + $fishprice + $porkprice + $pastaprice + $pancitprice + $vegesprice + $seafoodsprice + $dessertprice + $chickenprice);
	$date = mysqli_real_escape_string($db, $_POST['date']);
	$time = mysqli_real_escape_string($db, $_POST['time']);
 	$sql = "INSERT INTO orders(code,name,address,contact,num_of_person,date_of_service,time_of_service,total_price) values ('$code','$name','$address', '$contact','$num_person','$date','$time','$totalprice')";
 	$result = mysqli_query($db,$sql);

 	if(!$result){
 		echo '<script type="text/javascript">alert("!! Failed");</script>';
 	}
 	else{
 		header("Location: admin_page.php");
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
							<th class="menu_num">Name</th>
							<th class="menu_name">Address</th>
							<th class="menu_price">Contact</th>
							<th class="menu_price">Number of person</th>
							<th class="menu_price">Date of person</th>
							<th class="menu_price">Time of person</th>
							<th class="menu_price">Total price</th>
							<th class="menu_price">ACTION</th>
						</tr>
						<?php
								$sql = "SELECT * FROM service_only_orders";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}
								else {
								while ($row=mysqli_fetch_assoc($result)) {
							?>
						<tr>
							<td class="td"><?=$row['name'];?></td>
							<td class="td"><?=$row['address'];?></td>
							<td class="td"><?=$row['contact'];?></td>
							<td class="td"><?=$row['num_of_person'];?></td>
							<td class="td"><?=$row['date_of_service'];?></td>
							<td class="td"><?=$row['time_of_service'];?></td>
							<td class="td"><?=$row['total_price'];?></td>
							<td class="td">
								<a href="delete_service_only_orders.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">DELETE</button></a>
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
</body><?php
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Results Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="body">
		<div class="header">
			ATHELO'S CATERING SERVICE
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="custom_menu.php"><button>Back</button></a>
				<a href="logout"><button>Log Out</button></a>
			</div>
		</div>
		<div class="search_content" >
			<h1>Order Results</h1>
			<h5 style="color: red">Reminder: The price for additional menu is not yet included in the indicated total price. Payment for it will be calculated and taken manually.</h5>
			<table border="1" width="100%" style="border-collapse: collapse;">
				<tr>
					<th colspan="16">Service/Purchase Order</th>
				</tr>
				<tr>
					<th>Beef</th>
					<th>Chicken</th>
					<th>Fish</th>
					<th>Pasta</th>
					<th>Pork</th>
					<th>Pancit</th>
					<th>Veges</th>
					<th>Seafoods</th>
					<th>Dessert</th>
					<th>Additional menu</th>
					<th style="width: 10%;">Number of person</th>
					<th style="width: 8%;">Price</th>
					<th style="width: 8%;">Action</th>
				</tr>
				<?php 
					$code= $_GET['code'];

					$sql = "SELECT * FROM orders WHERE ( code LIKE '%$code%')";

					$result = mysqli_query($db,$sql);

						if(mysqli_num_rows($result) > 0){

					while($row = mysqli_fetch_assoc($result)){ 
				?>
				<tr>
					<td><?php echo $row['beef']; ?></td>
					<td><?php echo $row['chicken']; ?></td>
					<td><?php echo $row['fish']; ?></td>
					<td><?php echo $row['pasta']; ?></td>
					<td><?php echo $row['pork']; ?></td>
					<td><?php echo $row['pancit']; ?></td>
					<td><?php echo $row['veges']; ?></td>
					<td><?php echo $row['seafoods']; ?></td>
					<td><?php echo $row['desserts']; ?></td>
					<td><?php echo $row['other_menu']; ?></td>
					<td><?php echo $row['num_of_person']; ?></td>
					<td><?php echo $row['total_price']; ?></td>
					<td style="text-align: center;">
							<a href="home.php" onclick="alert('Your order has been saved')" class="edit_btn" ><button style="background-color: green">OK</button></a>
							<a href="cancel_order.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Cancel</button></a>
						</td>
				</div>	
			</tr>
		</table>

			<?php	}


			}else {

				echo "No Results Found!!";
			}


	?>
	
</div>

	</div>
	
</body>
</html>