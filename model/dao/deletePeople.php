<?php
require_once '../../controller/connection/connection.php';
$id =$_GET['id'];
try {
		$sql = "DELETE FROM `persona` where `persona`.`cod_empleado` = '$id'";
		$conn->query($sql);
		$conn->commit();

		mysqli_close($conn);

		header ("Location: ../../view/managerPlus/view_users.php");
	} catch (Exception $e) {

		$connection->rollback();
		echo 'Something fails: ',  $e->getMessage(), "\n";
		mysqli_close($conn);
	}

?>