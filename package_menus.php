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
			ATHELO'S CATERING SERVICE
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="home.php"><button>Back</button></a>
				<a href="logout.php"><button>Log Out</button></a>
			</div>
		</div>
		<div class="side-panel">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="cus_info" style="margin-top: 3%">
						Please fill-in the needed information. . .
						<table border="0" width="100%">
							<tr>
								<th style="width: 40%">Enter any code</th>
								<td><input style="color: black" type="password" placeholder="Please remember your code" name="code"></td>
							</tr>
							<tr>
								<th style="width: 40%">Name</th>
								<td><input type="text" name="name"></td>
							</tr>
							<tr>
								<th style="width: 40%">Menu</th>
								<td>
									<select name="menu">
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<th style="width: 40%">Address/Venue</th>
								<td><input type="text" name="address"></td>
							</tr>
							<tr>
								<th style="width: 40%">Contact Number</th>
								<td><input type="text" name="contact_num"></td>
							</tr>
							<tr>
								<th style="width: 40%">Other menu</th>
								<td><input type="text" name="others"></td>
							</tr>
							<tr>
								<th style="width: 40%">Number of person</th>
								<td><input type="number" name="num_person"></td>
							</tr>
							<tr>
								<th style="width: 40%">Date of service:</th>
								<td><input type="date" name="date"></td>
							</tr>
							<tr>
								<th style="width: 40%">Time of service:</th>
								<td><input type="time" name="time"></td>
							</tr>
						</table>
					</div>
					<div class="lgn-btn" ><br><br>
			            <button type="submit" class="btn btn-primary btn-lg  btn-block" tabindex="8">
			                 Submit
			            </button>
		            </div>
		            
				</form>
				<div style="width: 100%; height: 140px;float: left;margin-top: 7%;">
		            	Please review your order before you exit. . . <br>
		            	<form action="search_package_orders.php" method="get">
		            		<label><b>Enter your code: </b></label><input type="text" name="code" required=""><button type="submit"><b>GO</b></button>
		            	</form>
		            </div>
			</div>
			<div class="content-panel">
				<div class="menu-content-panel1"><br>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package menu 01</b>
					<center><table border="1" width="50%">
						<tr>
							<th class="menu_num">Menu 01 Php300.00/head </th>
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
							<th class="menu_num">Menu 02 Php380.00/head </th>
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
							<th class="menu_num">Menu 03 Php400.00/head </th>
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
</html>