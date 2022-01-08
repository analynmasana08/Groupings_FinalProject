<?php
	if(isset($_SESSION['user'])){
		header('Location:index.php');
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
				<a href="admin_login.php"><button>Log Out</button></a>
			</div>
		</div>
		<?php include("content1.php") ?>
	</div>
</body>