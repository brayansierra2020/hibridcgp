<?php
class ControllerDedicatedPeople{
	public static function savePeople() {
		
		//incluyendo conexion
		require_once '../connection/connection.php';
//recuperando datos
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$identificacion = $_POST['identificacion'];
		$genero = $_POST['genero'];
		$telefono = $_POST['telefono'];
		$fecha = $_POST['nacimiento'];
		$usuario = $_POST['usuario'];
		$cargo = $_POST['cargo'];
		$rolusuario = "USUARIO";
		$correo = $_POST['correo'];
		$pass = $_POST['contraseña'];
//Encriptar usuarios a base de datos
		$contraseña = md5($pass);
//insertando datos a la base de datos
		try {

			$res = $conn->query("INSERT INTO `persona`(`nombre_persona`, `apellido_persona`, `fecha_nacimiento`, `documento_identificacion`, `genero_id_genero`, `cargo_id_cargo`, `rol_usuario_id_rol`) VALUES ('$nombre', '$apellido', '$fecha', '$identificacion', '$genero', '$cargo', (SELECT id_rol From rol_usuario where descripcion_rol like '$rolusuario'))");

			$conn->query("INSERT INTO user VALUES ('$usuario', '$contraseña', (SELECT cod_empleado From persona where documento_identificacion = $identificacion))");

			$conn->query("INSERT INTO telefono VALUES (NULL, $telefono,(SELECT cod_empleado From persona where documento_identificacion = '$identificacion'))");  

			$conn->query("INSERT INTO email VALUES (NULL, '$correo',(SELECT cod_empleado From persona where documento_identificacion = '$identificacion'))");  

			$conn->commit();
			
			header ("location: ../../");

		} catch (Exception $e) {
			$conexion->rollback();
			echo 'ERROR ',  $e->getMessage(), "\n";
		}



	}
}
?>