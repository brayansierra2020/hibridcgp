<?php
/**
 * 
 */
class ControllerDedicatedCategory{
	public static function saveCategory() {
		require_once ('../connection/connection.php');

		$name_categoria = strtoupper(@$_POST["category"]);

		try {

			$sql = "INSERT INTO categoria (id_categoria, nombre_categoria) VALUES (null, '$name_categoria')";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/category/addCategory.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}


	public static function updateCategory() {
		require_once ('../connection/connection.php');

		$name_categoria = strtoupper(@$_POST["category"]);
		$id_categoria = @$_POST['identifier'];

		try {

			$sql = "UPDATE `categoria` SET `nombre_categoria` = '$name_categoria' WHERE `categoria`.`id_categoria` = '$id_categoria'";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/category/editCategory.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function listCategory() {
		require_once ('../connection/connection.php');

		try {

			$sql = "SELECT * FROM categoria ORDER BY nombre_categoria asc";
			$conn->query($sql);

			mysqli_close($conn);

			header("Location: ../../view/forms/category/");
		} catch (Exception $e) {

			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function deleteCategory() {
		require_once ('../connection/connection.php');

		$id_categoria = @$_POST['identifier'];

		try {

			$sql = "DELETE FROM `categoria` WHERE `categoria`.`id_categoria` = '$id_categoria'";
			$conn->query($sql);
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/category/deleteCategory.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	
}
?>