<?php include_once("../../../model/dao/acces_page.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="page for list all products" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>CGPvisual- Products</title>

</head>
<body>
	<center>
	<fieldset>
		<div class="card" style="width: 30rem;">
			<div class="card-body">
				<form>
						<br>
						<label>
							<h5>Administrar Inventario</h5>
						</label>
						<div class="accordion" id="accordMgerStock">

							<!-- products -->
							<?php require_once("../../managerPlus/view_products.php") ?>
							<!-- products -->
							<?php require_once("../../managerPlus/view_condition.php") ?>
							<!-- products -->
							<?php require_once("../../managerPlus/view_state.php") ?>
							<!-- products -->
							<?php require_once("../../managerPlus/view_category.php") ?>

						</div>
						<br>
						<a href="../../dash.php" class="btn btn-secundary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
				</form>
			</div>
		</div>
	</fieldset>
	</center>
	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>