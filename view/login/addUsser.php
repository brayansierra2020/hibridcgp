<?php include_once("../../model/dao/acces_page.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="control panel" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Add Users</title>
</head>
<body>

	<form action="../../controller/app_controller/controller.php" method="POST">

		<center>

			<fieldset>

				<div class="card">
					<h5 class="card-title">Datos Personales</h5>
					<div class="card-body">

						<!-- nombre-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nombre">Nombre</label>  
							<div class="col-md-4">
								<input id="nombre" name="nombre" type="text" placeholder="Nombre (s)" class="form-control input-md">
							</div>
						</div>

						<!-- apellidos-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="apellido">Apellidos</label>  
							<div class="col-md-4">
								<input id="apellido" name="apellido" type="text" placeholder="Apellidos" class="form-control input-md">
							</div>
						</div>

						<!-- identificacion-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="identificacion">Identificacion</label>  
							<div class="col-md-4">
								<input id="identificacion" name="identificacion" type="text" placeholder="Identificacion" class="form-control input-md">
							</div>
						</div>

						<!-- genero-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="genero">Genero</label>  
							<div class="col-md-4">
								<?php include_once("../forms/others/loadgender.php"); ?>
							</div>
						</div>

						<!-- fecha de nacimiento-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nacimiento">Fecha de Nacimiento</label>  
							<div class="col-md-4">
								<input id="nacimiento" name="nacimiento" type="date" placeholder="placeholder" class="form-control input-md">
							</div>
						</div>

						<!-- Cargo-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="cargo">Cargo</label>  
							<div class="col-md-5">
								<?php include_once("../forms/others/loadcargo.php"); ?>
							</div>
						</div>

						<!-- Telefono-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="telefono">Telefono</label>  
							<div class="col-md-4">
								<input id="telefono" name="telefono" type="number" placeholder="Telefono" class="form-control input-md">
							</div>
						</div>
					</div>
				</div>

				<br>

				<div class="card">
					<h5 class="card-title">Datos de Usuario</h5>
					<div class="card-body">

						<!-- Correo -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="correo">Correo Electronico</label>  
							<div class="col-md-4">
								<input id="correo" name="correo" type="email" placeholder="Correo" class="form-control input-md">
							</div>
						</div>

						<!-- Usuario -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="usuario">Usuario</label>  
							<div class="col-md-4">
								<input id="usuario" name="usuario" type="text" placeholder="Usuario" class="form-control input-md">
							</div>
						</div>

						<!-- contraseña-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="contraseña">Contraseña</label>  
							<div class="col-md-4">
								<input id="contraseña" name="contraseña" type="password" placeholder="Contraseña" class="form-control input-md">
							</div>
						</div>
					</div>
				</div>

				<br>

				<button type="submit" name="trigger" value="savePerson" class="btn btn-primary">Registrar</button>
				<br><br>
				<h6 class="mb-2 text-muted">¿ya tienes cuenta? 
					<a href="../../">¡ir a pagina de inicio!</a>
				</h6>

			</fieldset>

		</center>

	</form>

</body>
</html>