<?php
class ControllerDedicatedLogin{
	public static function loginUser() {
		
		@session_start();
		@session_name('users');
//conexion de base de datos
		include_once '../connection/connection.php';
//recuperar archivos de fomrulario
		$usuario = $_POST['user'];
		$pass = $_POST['passw'];
		$contraseña = md5($pass);
//logueo
		$Session = "SELECT `descripcion_rol` FROM view_login WHERE  `username` = '$usuario' AND `password`= '$contraseña'";

		$result = mysqli_query($conn,$Session);

		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		@$active = $row['active'];
		$count = mysqli_num_rows($result); 
		if($count == true) {
			$rs = $conn->query("SELECT * FROM show_people WHERE  `usuario` = '$usuario'");
			$fila = $rs->fetch_assoc(); 
			$_SESSION['login'] = $fila;

			header("Location: ../../view/dash.php");
			
		}else {
			header("Location: ../../view/login/loginUsser.php");
			@session_destroy();
		}

		mysqli_close($conn);
	}

	public static function endSession(){
		session_start();
		session_unset();
		session_destroy();

		header("Location: ../../index.php");
	}
}
?>