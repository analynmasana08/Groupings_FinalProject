<?php
require('db_connect.php');
$status="";

if (isset($_GET['id'])) {
			$id=$_GET['id'];

			$sql="DELETE FROM service_only_orders WHERE id=$id";
			if(mysqli_query($db,$sql)){
				echo '<script type="text/javascript">alert("Oder has been canceled!");</script>';
				header('location:admin_service_only_order.php');
			}
			else{
				mysqli_error($db);
			}
			
		}

?>