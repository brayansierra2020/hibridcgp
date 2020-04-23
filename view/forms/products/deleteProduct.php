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
	<meta name="page for add products" content="">
	<meta name="team_cgpvisual" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	

	<title>CGPvisual- Products</title>

</head>
<body>	 
	<center>
		<form action="../../../controller/app_controller/controller.php" method="POST"> 
			<div class="form-group">
				<label for="id">ID - Producto</label>
				<select class="form-control" id="id" name="id" required>
					<option value="" selected>Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM producto order by nombre_producto asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_producto'];
						$id = $datos['id_producto'];
					?>
						<option value="<?php echo($id); ?>"> <?php echo ($id." - ".$nombre); ?></option>
					<?php
					}
					?>
				</select>
					<small id="id" class="form-text text-muted">Seleccione el producto que desea eliminar.</small>
					<br>
				</div>
				<button type="submit" name="trigger" value="deleteProducts" class="btn btn-primary">Eliminar</button>
			</form>

			<br>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
		</center>
	</body>
</html>