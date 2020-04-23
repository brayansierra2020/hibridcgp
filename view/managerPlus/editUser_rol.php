<?php
@session_name("dataUsr");
@session_start();

include_once("../../model/dao/acces_page.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="control panel" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>CGPvisual-User_rol</title>

</head>
<body>
	<?php require_once "../../model/dao/edit_people.php"; ?>
	<center>
		<br>
		<br>
		<fieldset>
			<div class="container">
				<h1>Actualizacion de Rol</h1>
			</div>
			<div class="container">
				<form action="../../model/dao/crud_editPeople.php" method="POST">
					<table>
						<tr>
							<td><input class="form-control" type="hidden" name="txtid" value="<?php echo @$_SESSION['cod_empleado']; ?>" readonly></td>
						</tr>
						<tr>
							<td><label>Nombre</label></td>
							<td><input type="text" class="form-control" placeholder="Nombre" value="<?php echo @$_SESSION['nombre_persona']; ?>" readonly></td>
						</tr>	
						<tr>
							<td><label>Apellido</label></td>
							<td><input type="text" class="form-control" placeholder="Apellido" value="<?php echo @$_SESSION['apellido_persona']; ?>" readonly></td>
						</tr>
						<tr>
							<td><label>Identificacion</label></td>
							<td><input type="number" class="form-control" placeholder="Documento Identificacion" value="<?php echo @$_SESSION['documento_identificacion']; ?>" readonly></td>
						</tr>
						<tr>
							<td><label>Telefono</label></td>
							<td><input type="number" class="form-control" placeholder="Telefono" value="<?php echo @$_SESSION['numero_telefono']; ?>" readonly></td>
						</tr>
						<tr>
							<td><label>Fecha Nacimiento</label></td>
							<td><input type="date" class="form-control" placeholder="Fecha Nacimiento" value="<?php echo @$_SESSION['fecha_nacimiento']; ?>" readonly></td>
						</tr>
						<tr>
							<td><label>Usuario</label></td>
							<td><input type="text" class="form-control" placeholder="username" value="<?php echo @$_SESSION['username']; ?>" readonly></td>
						</tr>
						<tr>
							<td><label>Genero</label></td>
							<td>
								<?php include_once("../forms/others/loadgender.php"); ?>
							</td>
						</tr>
						<tr>
							<td><label>Cargo</label></td>
							<td>
								<?php include_once("../forms/others/loadcargo.php"); ?>
							</td>
						</tr><tr>
							<td><label>Rol Usuario</label></td>
							<td> 
								<?php include_once("../forms/others/loadrol.php"); ?>
							</td>
						</tr>
					</table>
					<br>
					<input type="submit"  class="btn btn-warning" name="trigger" value="Actualizar">
					<input type="submit" href="view_users.php"  class="btn btn-info" name="Regresar" value="Regresar">
				</form>
			</div>
		</fieldset>
	</center>
	<?php
	@session_destroy(); 
	?>
</body>
</html>