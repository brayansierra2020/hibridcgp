<?php
$id =$_GET['id'];

require_once '../../controller/connection/connection.php';

try {

	$consulta1 = "SELECT * FROM persona where cod_empleado= $id";
$resultadoPer = mysqli_query($conn,$consulta1);


$consulta2 = "SELECT * FROM `telefono` WHERE `pers-telf` = $id";
$resultadoTel = mysqli_query($conn,$consulta2);


$consulta3 = "SELECT * FROM user where persona_cod_empleado = $id";
$resultadoUsr = mysqli_query($conn,$consulta3);


$consulta4 = "SELECT * FROM cargo where id_cargo=(SELECT cargo_id_cargo FROM persona WHERE cod_empleado = $id)";
$resultadoCarg = mysqli_query($conn,$consulta4);


$consulta5 = "SELECT * FROM rol_usuario where id_rol=(SELECT rol_usuario_id_rol FROM persona WHERE cod_empleado = $id)";
$resultadoRusr = mysqli_query($conn,$consulta5);


$consulta6 = "SELECT * FROM genero where id_genero=(SELECT genero_id_genero FROM persona WHERE cod_empleado = $id)";
$resultadoGen = mysqli_query($conn,$consulta6);

@session_name("dataUsr");
@session_start();

while ($fila1=mysqli_fetch_assoc($resultadoPer)){
	while ($fila2=mysqli_fetch_assoc($resultadoTel)){
		while ($fila3=mysqli_fetch_assoc($resultadoUsr)){
			while ($fila4=mysqli_fetch_assoc($resultadoCarg)){
				while ($fila5=mysqli_fetch_assoc($resultadoRusr)){
					while ($fila6=mysqli_fetch_assoc($resultadoGen)){
						
						@$_SESSION["cod_empleado"] = $fila1['cod_empleado'];
						@$_SESSION["nombre_persona"] = $fila1['nombre_persona'];
						@$_SESSION["apellido_persona"] = $fila1['apellido_persona'];
						@$_SESSION["fecha_nacimiento"] = $fila1['fecha_nacimiento'];
						@$_SESSION["documento_identificacion"] = $fila1['documento_identificacion'];

						@$_SESSION["persona_cod_empleado"] = $fila3['persona_cod_empleado'];
						@$_SESSION["username"] = $fila3['username'];

						@$_SESSION["id_genero"] = $fila6['id_genero'];
						@$_SESSION["nombre_genero"] = $fila6['nombre_genero'];

						@$_SESSION["id_cargo"] = $fila4['id_cargo'];
						@$_SESSION["nombre_cargo"] = $fila4['nombre_cargo'];

						@$_SESSION["id_rol"] = $fila5['id_rol'];
						@$_SESSION["descripcion_rol"] = $fila5['descripcion_rol'];

						@$_SESSION["pers_tel"] = $fila2['pers_tel'];
						@$_SESSION["numero_telefono"] = $fila2['numero_telefono'];

					}
				}
			}
		}
	}
}

mysqli_close($conn);
	
} catch (Exception $e) {

	echo "Error: ".mysql_error();

	mysqli_close($conn);
	
}

?>