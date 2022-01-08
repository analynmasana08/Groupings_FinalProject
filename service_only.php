<?php
include('db_connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$code = mysqli_real_escape_string($db, $_POST['code']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
 	$address = mysqli_real_escape_string($db, $_POST['address']);
 	$contact = mysqli_real_escape_string($db, $_POST['contact_num']);
 	$num_person = mysqli_real_escape_string($db, $_POST['num_person']);
	$date = mysqli_real_escape_string($db, $_POST['date']);
	$time = mysqli_real_escape_string($db, $_POST['time']);
	$total_price = $num_person * 50;
 	$sql = "INSERT INTO service_only_orders(code,name,address,contact,num_of_person,date_of_service,time_of_service,total_price) values ('$code','$name','$address', '$contact','$num_person','$date','$time','$total_price')";
 	$result = mysqli_query($db,$sql);

 	if(!$result){
 		echo '<script type="text/javascript">alert("!! Failed");</script>';
 	}
 	else{
 		header("Location: service_only.php");
 	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Athelo's Catering</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="body">
		<div class="header">
			ATHELO'S CATERING SERVICE
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="home.php"><button>Back</button></a>
				<a href="logout.php"><button>Log Out</button></a>
			</div>
		</div>
		<div class="side-panel">
		<div class="btn1">
			<a href="custom_menu.php"><b>Menu</b></a><br>
			1. Beef <br>
			2. Chicken <br>
			3. Fish <br>
			4. Pasta <br>
			5. Pork <br>
			6. Pancit <br>
			7. Vegetables <br>
			8. Other Sea Foods
		</div>
		<div class="btn2">
			<a class="menu" href="package_menus.php"><b>Package Menus</b></a>
		</div>
		<div class="btn2">
			<a class="menu"href="service_only.php"><b>Service Only</b></a><br>
		</div>
	</div>
	<div class="content-panel"><br>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="cus_info1">
						Please fill-in the needed information. . .
						<table border="1" width="100%" style="border-collapse: collapse;">
							<tr>
								<th >Enter any code</th>
								<td><input style="color: black;height:25px;width: 98%; background-color: transparent;"type="password" placeholder="Please remember your code"  name="code"></td>
							</tr>
							<tr>
								<th >Name</th>
								<td><input type="text" style="height:25px;width: 98%;background-color: transparent;" name="name"></td>
							</tr>
							<tr>
								<th >Address/Venue</th>
								<td><input type="text" style="height:25px;width: 98%;background-color: transparent;" name="address"></td>
							</tr>
							<tr>
								<th >Contact Number</th>
								<td><input type="text" style="height:25px;width: 98%;background-color: transparent;" name="contact_num"></td>
							</tr>
							<tr>
								<th >Number of person</th>
								<td><input type="number" style="height:25px;width: 98%;background-color: transparent;" name="num_person"></td>
							</tr>
							<tr>
								<th >Date of service:</th>
								<td><input type="date" style="height:25px;width: 99%;background-color: transparent;" name="date"></td>
							</tr>
							<tr>
								<th >Time of service:</th>
								<td><input type="text" style="height:25px;width: 98%;background-color: transparent;" name="time"></td>
							</tr>
						</table>
					</div>
					<div class="lgn-btn1" >
			            <button type="submit" class="btn btn-primary btn-lg  btn-block" tabindex="8">
			                 Submit
			            </button>
		            </div>
		            
				</form>
				<div style="width: 100%; height: 140px;float: left;margin-top: 5%; margin-left: 8%;">
		            	Please review your order before you exit. . . <br>
		            	<form action="search_service_only.php" method="get">
		            		<label><b>Enter your code: </b></label><input type="text" name="code" required=""><button type="submit"><b>GO</b></button>
		            	</form>
		            </div>
	</div>
	</div>
</body>