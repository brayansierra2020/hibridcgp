<?php include_once("../../../model/dao/acces_page.php");  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="page for add status" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	

	<title>CGPvisual- Status</title>

</head>
<body>	
	<fieldset style="
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    ">
	<center>
		<form action="../../../controller/app_controller/controller.php" method="POST"> 
			<div class="form-group">
				<label for="exampleNameStatus">Nombre de Estado</label>
				<input name="status" type="text" class="form-control" id="exampleNameCondition" aria-describedby="statuslHelp">
				<small id="statuslHelp" class="form-text text-muted">Digite el nombre de estado para los productos.</small>
			</div>
			<a href="../stock/managerStock.php" class="btn btn-primary" role="button" aria-pressed="true">Regresar...</a>
			<button type="submit" name="trigger" value="saveStatus" class="btn btn-primary">Guardar</button>
		</form>
	</center>
</fieldset>
</body>
</html>