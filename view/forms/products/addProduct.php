<?php
@require_once '../../../controller/connection/connection.php';
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
	
		<fieldset style="
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    ">
    <center>
		<form action="../../../controller/app_controller/controller.php" method="POST" enctype="multipart/form-data"> 

			<label>
				<h2>Agregar Productos</h2>
				</label>

			<div class="form-group">

				<label for="name">Nombre</label>
				<input name="name" type="text" class="form-control" id="name" aria-describedby="name" required>

				<label for="ubication">Ubicacion</label>
				<input name="ubication" type="text" class="form-control" id="ubication" aria-describedby="ubication">

				<label for="serial">Serial de Producto</label>
				<input name="serial" type="text" class="form-control" id="serial" aria-describedby="serial">

				<label for="fabricant">fabricante</label>
				<input name="fabricant" type="text" class="form-control" id="fabricant" aria-describedby="fabricant">

				<label for="objProduct">Observaciones</label>
				<input name="objProduct" type="text" class="form-control" id="objProduct" aria-describedby="objProduct">

				<label for="description">Descripcion</label>
				<input name="description" type="text" class="form-control" id="description" aria-describedby="description">


				<label for="img">Imagen</label>
				<input name="img" type="file" class="form-control" id="img" aria-describedby="img">


				<label for="category">Categoria</label>
				<select class="form-control" id="category" name="category" required>
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM categoria order by nombre_categoria asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_categoria'];
						$id = $datos['id_categoria'];
					?>
						<option value="<?php echo($id); ?>"> <?php echo ($nombre); ?></option>
					<?php
					}
					?>
				</select>

				<label for="condition">Condicion</label>
				<select class="form-control" id="condition" name="condition" required>
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM condicion order by nombre_condicion asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_condicion'];
						$id = $datos['id_condicion'];
					?>
						<option value="<?php echo($id); ?>"> <?php echo ($nombre); ?></option>
					<?php
					}
					?>
				</select>

				<label for="status">Estado</label>
				<select class="form-control" id="status" name="status" required>
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM estado order by nombre_estado asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_estado'];
						$id = $datos['id_estado'];
					?>
						<option value="<?php echo($id); ?>"> <?php echo ($nombre); ?></option>
					<?php
					}
					?>
				</select>

			</div>


			<button type="submit" name="trigger" value="saveProducts" class="btn btn-primary">Guardar</button>
		</form>
		<hr>
		<a href="../stock/managerStock.php" class="btn btn-secundary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
		</center>
	</fieldset>
	
</body>
</html>
<?php
mysqli_close($conn);
?>