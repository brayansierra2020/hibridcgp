<?php
/**
 * 
 */
class ControllerDedicatedStatus{

	public static function saveStatus() {

		require_once ('../connection/connection.php');

		$name_estado = strtoupper(@$_POST["status"]);

		try {

			$sql = "INSERT INTO estado (id_estado, nombre_estado) VALUES (null, '$name_estado')";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/status/addStatus.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}


	public static function updateStatus(){

		require_once ('../connection/connection.php');

		$name_estado = strtoupper(@$_POST["status"]);
		$id_estado = @$_POST['identifier'];

		try {

			$sql = "UPDATE `estado` SET `nombre_estado` = '$name_estado' WHERE `estado`.`id_estado` = '$id_estado'";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/status/editStatus.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function listStatus() {
		require_once ('../connection/connection.php');

		try {

			$sql = "SELECT * FROM estado ORDER BY nombre_estado asc";
			$conn->query($sql);

			mysqli_close($conn);

			header("Location: ../../view/forms/status/");
		} catch (Exception $e) {

			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function deleteStatus() {
		require_once ('../connection/connection.php');

		$id_estado = @$_POST['identifier'];

		try {

			$sql = "DELETE FROM `estado` WHERE `estado`.`id_estado` = '$id_estado'";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/status/deleteStatus.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	
}
?>