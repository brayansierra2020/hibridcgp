<?php
	include_once "../../model/dao/show_people.php";
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

	<title>CGPvisual-Users</title>

</head>
<body>
	<center>
	<br>
	<br>
	<fieldset style="
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    ">
		<div>
			<div>
				<h1>Administrar Usuarios</h1>
			</div class="container">
			<table class="table table-bordered table-hover" style="font-weight: 20px;">
				<div class="table-responsive">
					<thead>
						<tr class="danger ">
							<th style="text-align: center;">Codigo</th>
							<th style="text-align: center;">Nombre</th>
							<th style="text-align: center;">Apellido</th>
							<th style="text-align: center;">Edad</th>
							<th style="text-align: center;">Documento</th>
							<th style="text-align: center;">Usuario</th>
							<th style="text-align: center;">Telefono</th>
							<th style="text-align: center;">Genero</th>
							<th style="text-align: center;">Cargo</th>
							<th style="text-align: center;">Rol</th>
							<th style="text-align: center;">Opcion</th>
						</tr>
					</thead>

					<tbody>
						<?php while ($fila=mysqli_fetch_assoc($resultado)){ ?>
							<tr>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['codigo']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['nombre']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['apellido']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['edad']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['identificacion']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['usuario']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['num_tel']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['sexo']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['n_cargo']?></td>
								<td style="color:#456789;font-size:80%;"><?php echo $fila['r_user']?></td>
								<th>
									<a type="submit" class="btn btn-danger" href="../../model/dao/deletePeople.php?id=<?php echo $fila['codigo'];?>">Eliminar</a>
									<a type="submit" class="btn btn-warning" href="editUser_rol.php?id=<?php echo $fila['codigo']; ?>">Editar</a>

								</th>
							</tr>   
						<?php }?>
					</tbody>
				</div>
			</table>
			<a href="../dash.php" class="btn btn-secundary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
		</div>
	</fieldset>
</center>
</body> 
</html>