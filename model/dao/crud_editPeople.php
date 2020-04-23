<?php

require_once '../../controller/connection/connection.php';

$idp= @$_POST['txtid'];
$rolusuario = @$_POST['rol_usuario'];

if($rolusuario!= null){

	try {
		$sql = "UPDATE `persona` SET `rol_usuario_id_rol` = '$rolusuario' WHERE `persona`.`cod_empleado` = '$idp'";
		$conn->query($sql);
		$conn->commit();

		mysqli_close($conn);

		header ("location: ../../view/managerPlus/view_users.php");
	} catch (Exception $e) {

		$connection->rollback();
		echo 'Something fails: ',  $e->getMessage(), "\n";
		mysqli_close($conn);
	}

}
?>