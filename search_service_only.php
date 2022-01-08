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
				<a href="package_menus.php"><button>Back</button></a>
				<a href="logout.php"><button>Log Out</button></a>
			</div>
		</div>
		<div class="search_content" >
			<h1>Order Results</h1>
			<center>
				<table border="1" width="80%">
				<tr>
					<th colspan="16">Service/Purchase Order</th>
				</tr>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Number of person</th>
					<th>Date of service</th>
					<th>Time of service</th>
					<th>Action</th>
				</tr>
				<?php 
					$code= $_GET['code'];

					$sql = "SELECT * FROM service_only_orders WHERE ( code LIKE '%$code%')";

					$result = mysqli_query($db,$sql);

						if(mysqli_num_rows($result) > 0){

					while($row = mysqli_fetch_assoc($result)){ 
				?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['num_of_person']; ?></td>
					<td><?php echo $row['date_of_service']; ?></td>
					<td><?php echo $row['time_of_service']; ?></td>
					<td style="text-align: center;">
							<a href="home.php" onclick="alert('Your order has been saved')" class="edit_btn" ><button style="background-color: green">OK</button></a><br>
							<a href="cancel_package_order.php?id=<?php echo $row['id'] ?>" class="edit_btn" ><button style="background-color: red">Cancel</button></a>
						</td>
				</div>	
			</tr>
		</table>
			</center>

			<?php	}


			}else {

				echo "No Results Found!!";
			}


	?>
</div>
</div>


	</div>
	
</body>
</html>