<?php include_once("../../../model/dao/acces_page.php");?> 
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
				<label for="exampleNameCategory">Nombre de Categoria</label>
				<input name="category" type="text" class="form-control" id="exampleNameCategory" aria-describedby="categorylHelp">
				<small id="categorylHelp" class="form-text text-muted">Digite el nombre de la condición para los productos.</small>
			</div>
			<button type="submit" name="trigger" value="saveCategory" class="btn btn-primary">Guardar</button>
		</form>
		
		<br>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
	</center>
</body>
</html>