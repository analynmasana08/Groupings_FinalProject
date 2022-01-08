<?php
include('db_connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
 	$password = mysqli_real_escape_string($db, $_POST['password']);
 	$sql = "INSERT INTO accounts(username,password) values ('$username', '$password')";
 	$result = mysqli_query($db,$sql);

 	if(!$result){
 		echo '<script type="text/javascript">alert("!! Failed");</script>';
 	}
 	else{
 		header("Location: index.php");
 	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<div class="body">
		<div class="header">
			ATHELO'S CATERING SERVICE
			<div style="float: right;margin-top: 2%;margin-right: 1%">
				<a href="index.php"><button>Back</button></a>
			</div>
		</div>
		<div class="left-side" style="width: 59%;height: 489px;margin-left: .5%;"><br><br>
			<img src="img/analyn.png"> <br>
			ATHELO'S CATERING  <br>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p><br>
			<table border="0" width="90%">
				<tr>
					<th>Facebook:</th>
					<td>Athelo Catering </td>
					<th>Gmail:</th>
					<td>athelocateringservice@gmail.com</td>
				</tr>
				<tr>
					<th>Contact Number:</th>
					<td>09876543212</td>
					<th>Address:</t>
					<td>Brgy. San Roque Tunga, Leyte</td>
				</tr>
			</table>
		</div>
		<div class="right-side" style="width:39%; height: 489px; margin-left: 1%;"><br><br>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<h1>Create Account</h1>
				<fieldset>
					<div class="form-group">
						<input type="text" name="username" placeholder="E  n  t  e  r   U  s  e  r  n  a  m  e" required="">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="E  n  t  e  r   P  a  s  s  w  o  r  d" required="">
					</div>
					<div class="lgn-btn">
	                    <button type="submit" class="btn btn-primary btn-lg  btn-block" tabindex="8">
	                      Sign In
	                    </button>
                  	</div>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>