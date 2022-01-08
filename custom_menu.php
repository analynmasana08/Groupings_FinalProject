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
			ATHELO'S CATERING SERVICE
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="home.php"><button>Back</button></a>
				<a href="logout.php"><button>Log Out</button></a>
			</div>
		</div>
			<div class="side-panel">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					Please enter the number of your chosen menu. . . <br>
					<div class="option">
						<table border="0" width="100%">
							<tr>
								<th>Beef Menu</th>
								<td>
									<select name="beef">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>Chicken Menu</th>
								<td>
									<select name="chicken">
										<option>0</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>Fish Menu</th>
								<td>
									<select name="fish">
										<option>0</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>Pasta</th>
								<td>
									<select name="pasta">
										<option>0</option>
										<option>16</option>
										<option>17</option>
										<option>18</option>
										<option>19</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>Pork Menu</th>
								<td>
									<select name="pork">
										<option>0</option>
										<option>20</option>
										<option>21</option>
										<option>22</option>
										<option>23</option>
										<option>24</option>
									</select>
								</td>
							</tr>
							
						</table>
					</div>
					<div class="option">
						<table border="0" width="100%">
							<tr>
								<th>
									Pancit
								</th>
								<td>
									<select name="pancit">
										<option>0</option>
										<option>25</option>
										<option>26</option>
										<option>27</option>
										<option>28</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									Vegetables
								</th>
								<td>
									<select name="veges">
										<option>0</option>
										<option>29</option>
										<option>30</option>
										<option>31</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									Other Sea Foods
								</th>
								<td>
									<select name="seafoods">
										<option>0</option>
										<option>32</option>
										<option>33</option>
										<option>34</option>
										<option>35</option>
										<option>36</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									Desserts
								</th>
								<td>
									<select name="desserts">
										<option>0</option>
										<option>37</option>
										<option>38</option>
										<option>39</option>
										<option>40</option>
										<option>41</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
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
					<div class="lgn-btn">
			            <button type="submit" class="btn btn-primary btn-lg  btn-block" tabindex="8">
			                 Submit
			            </button>
		            </div>
		            
				</form>
				<div style="width: 100%; height: 140px;float: left;margin-top: 7%;">
		            	Please review your order before you exit. . . <br>
		            	<form action="search.php" method="get">
		            		<label><b>Enter your code: </b></label><input type="text" name="code" required=""><button type="submit"><b>GO</b></button>
		            	</form>
		            </div>
			</div>
			<div class="content-panel"><br>
				Choose your menu here. . . <br><br>
				<div class="menu-content-panel" style="background-color: gold;">
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