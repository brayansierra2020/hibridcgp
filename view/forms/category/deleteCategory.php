<?php
require_once '../../../controller/connection/connection.php';
include_once("../../../model/dao/acces_page.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="page for add category" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	

	<title>CGPvisual- Category</title>

</head>
<body>	
	<center>
		<form action="../../../controller/app_controller/controller.php" method="POST"> 
			<div class="form-group">
				<label for="exampleIdCategory">Cod - Nombre</label>
				<select class="form-control" id="exampleIdCategory" name="identifier" required>
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM categoria order by nombre_categoria asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_categoria'];
						$id = $datos['id_categoria'];
					?>
						<option value="<?php echo($id); ?>"> <?php echo ($id." - ".$nombre); ?></option>
					<?php
					}
					mysqli_close($conn);
					?>
				</select>
					<small id="exampleIdCategory" class="form-text text-muted">Seleccione la categoria que desea eliminar.</small>
					<br>
				</div>
				<button type="submit" name="trigger" value="deleteCategory" class="btn btn-primary">Eliminar</button>
			</form>

			<br>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
		</center>
	</body>
</html>