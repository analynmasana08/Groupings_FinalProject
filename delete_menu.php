<?php
require('db_connect.php');
$status="";

if (isset($_GET['id'])) {
			$id=$_GET['id'];

			$sql="DELETE FROM menus WHERE id=$id";
			if(mysqli_query($db,$sql)){
				echo '<script type="text/javascript">alert("Oder has been canceled!");</script>';
				header('location:admin_menu_view.php');
			}
			else{
				mysqli_error($db);
			}
			
		}

?>