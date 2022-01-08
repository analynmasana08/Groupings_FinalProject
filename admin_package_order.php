<?php
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
			ATHELO'S CATERING SERVICE - Administrator
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="admin_page.php"><button>Back</button></a>
				<a href="admin_login.php"><button>Log Out</button></a>
			</div>
		</div>
		<div class="search_content" >
			<h1>Order Results</h1>
			<h5 style="color: red">Reminder: The price for additional menu is not yet included in the indicated total price. Payment for it will be calculated and taken manually.</h5>
			<center>
				<table border="1" width="80%">
				<tr>
					<th colspan="16">Service/Purchase Order</th>
				</tr>
				<tr>
					<th>Menu</th>
					<th>Additional menu</th>
					<th>Number of person</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
				<?php 
					$sql = "SELECT * FROM package_menu_orders";
								$result = mysqli_query($db, $sql);

								if (mysqli_num_rows($result)<=0) {
									echo "No data found";
								}

					while($row = mysqli_fetch_assoc($result)){ 
				?>
				<tr>
					<td><?php echo $row['menu']; ?></td>
					<td><?php echo $row['other_menu']; ?></td>
					<td><?php echo $row['num_of_person']; ?></td>
					<td><?php echo $row['total_price']; ?></td>
					<td style="text-align: center;">
							<a href="cancel_package_order.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Delete</button></a>
						</td>
				</div>	
			</tr>
		</table>
			</center>

			<?php	}


			


	?>
	
</div>


	</div>
	
</body>
</html>