<?php
require('db_connect.php');
$status="";

if (isset($_GET['id'])) {
			$id=$_GET['id'];

			$sql="DELETE FROM package_menu3 WHERE id=$id";
			if(mysqli_query($db,$sql)){
				echo '<script type="text/javascript">alert("Oder has been canceled!");</script>';
				header('location:admin_package_menu.php');
			}
			else{
				mysqli_error($db);
			}
			
		}

?>