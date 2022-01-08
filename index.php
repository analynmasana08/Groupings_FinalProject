<?php
include('db_connect.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
 	$password = mysqli_real_escape_string($db, $_POST['password']);
 	$sql = "SELECT * FROM accounts where username='$username' AND password='$password' ";
 	$query = mysqli_query($db,$sql);
 	$result=mysqli_num_rows($query);
 	if($result == 1){
 		header("Location: home.php");
 	}
 	else{
 		echo '<script type="text/javascript">alert("Invalid Input!!");</script>';
 	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<div class="body">
		<div class="header">
			ATHELO'S CATERING SERVICE
		</div>
		<div class="left-side" style="height: 82%; width: 59%;margin-left: .5%"><br><br>
			<img src="img/analyn.png" style="border-radius: 50%;"> <br>
			ATHELO'S CATERING SERVICE  <br>

			<p>
				<div style="width: 90%; margin-left: 5%;">
					Athelo's Catering Service is one of the best catering service in Leyte. It serve mostly in Tunga where it originates and some part of Carigara and Jaro. It is known as one of the best catering service in Leyte because of there very well and fine food preparation. In addition to it is there very accomodative and pleasing personnel.
				</div>
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
		<div class="right-side" style="height: 82%; width: 39%"><br><br>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<h1>User Login</h1>
				<fieldset>
					<div class="form-group">
						<input type="text" name="username" placeholder=" E  n  t  e  r   U  s  e  r  n  a  m  e" required="">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="E  n  t  e  r   P  a  s  s  w  o  r  d" required="">
					</div>
					<div class="lgn-btn">
	                    <button type="submit" class="btn" tabindex="8">
	                      Login
	                    </button>
                  	</div>
				</fieldset><br>
				<a href="create_account.php" >Create Account</a><br><br>
				<a href="admin_login.php" >Login as Administrator</a>
			</form>
		</div>
	</div>
</body>
</html>