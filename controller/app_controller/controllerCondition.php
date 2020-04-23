<?php
/**
 * 
 */
class ControllerDedicatedAction{
	public static function saveCondition() {
		require_once ('../connection/connection.php');

		$name_condition = strtoupper(@$_POST["condition"]);

		try {

			$sql = "INSERT INTO condicion (id_condicion, nombre_condicion) VALUES (null, '$name_condition')";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/condition/addCondition.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}


	public static function updateCondition() {
		require_once ('../connection/connection.php');

		$name_condition = strtoupper(@$_POST["condition"]);
		$id_condicion = @$_POST['identifier'];

		try {

			$sql = "UPDATE `condicion` SET `nombre_condicion` = '$name_condition' WHERE `condicion`.`id_condicion` = '$id_condicion'";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/condition/editCondition.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function listCondition() {
		require_once ('../connection/connection.php');

		try {

			$sql = "SELECT * FROM condicion ORDER BY nombre_condicion asc";
			$conn->query($sql);

			mysqli_close($conn);

			header("Location: ../../view/forms/condition/#");
		} catch (Exception $e) {

			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function deleteCondition() {
		require_once ('../connection/connection.php');

		$id_condicion = @$_POST['identifier'];

		try {

			$sql = "DELETE FROM `condicion` WHERE `condicion`.`id_condicion` = '$id_condicion'";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/condition/deleteCondition.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	
}
?>