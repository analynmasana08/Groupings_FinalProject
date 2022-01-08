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