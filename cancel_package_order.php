<?php
require('db_connect.php');
$status="";

if (isset($_GET['id'])) {
			$id=$_GET['id'];

			$sql="DELETE FROM package_menu_orders WHERE id=$id";
			if(mysqli_query($db,$sql)){
				echo '<script type="text/javascript">alert("Oder has been canceled!");</script>';
				header('location:search_package_orders.php');
			}
			else{
				mysqli_error($db);
			}
			
		}

?>