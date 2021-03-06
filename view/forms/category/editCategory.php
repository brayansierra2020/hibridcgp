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
				<label for="exampleIdCategory">Codigo Identificador</label>
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
					<small id="exampleIdCondition" class="form-text text-muted">Seleccione el codigo de la categoria que desea modificar.</small>
					<br>

					<label for="exampleNameCategory">Nombre de Condición</label>
					<input name="category" type="text" class="form-control" id="exampleNameCategory" aria-describedby="categorylHelp" required>
					<small id="categorylHelp" class="form-text text-muted">Modifique el nombre de la condición que se aplicara a los productos.</small>
				</div>
				<button type="submit" name="trigger" value="updateCategory" class="btn btn-primary">Guardar</button>
			</form>

			<br>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
		</center>
	</body>
</html>