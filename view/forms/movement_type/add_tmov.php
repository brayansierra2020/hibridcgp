<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="page for add condition" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	

	<title>CGPvisual- Movement Type</title>

</head>
<body>	
	<center>
		<form action="../../../controller/app_controller/controller.php" method="POST"> 
			<div class="form-group">
				<label for="exampleNameTm">Tipo de Movimiento</label>
				<input name="tmov" type="text" class="form-control" id="exampleNameTm" aria-describedby="tmovlHelp">
				<small id="tmovlHelp" class="form-text text-muted">Digite el nombre del tipo de movimiento.</small>
			</div>
			<button type="submit" name="trigger" value="saveTmov" class="btn btn-primary">Guardar</button>
		</form>

		<br>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
	</center>
</body>
</html>