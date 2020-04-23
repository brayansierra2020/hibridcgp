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
	<meta name="page for add condition" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	

	<title>CGPvisual- Condition</title>

</head>
<body>	
	<center>
		<form action="../../../controller/app_controller/controller.php" method="POST"> 
			<div class="form-group">
				<label for="exampleIdCondition">Codigo Identificador</label>
				<select class="form-control" id="exampleIdCondition" name="identifier" required>
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM condicion order by nombre_condicion asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_condicion'];
						$id = $datos['id_condicion'];
					?>
						<option value="<?php echo($id); ?>"> <?php echo ($id." - ".$nombre); ?></option>
					<?php
					}
					mysqli_close($conn);
					?>
				</select>
					<small id="exampleIdCondition" class="form-text text-muted">Seleccione el codigo de la condicion que desea modificar.</small>
					<br>

					<label for="exampleNameCondition">Nombre de Condición</label>
					<input name="condition" type="text" class="form-control" id="exampleNameCondition" aria-describedby="conditionlHelp" required>
					<small id="conditionlHelp" class="form-text text-muted">Modifique el nombre de la condición que se aplicara a los productos.</small>
				</div>
				<button type="submit" name="trigger" value="updateCondition" class="btn btn-primary">Guardar</button>
			</form>

			<br>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
		</center>
	</body>
</html>