<?php
require_once '../../../controller/connection/connection.php';
include_once("../../../model/dao/acces_page.php"); 
$arrLoad = unserialize(@$_GET['load']);
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

				<label for="id">ID - Producto</label>
				<select class="form-control" id="id" name="id" required>
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM producto order by nombre_producto asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_producto'];
						$id = $datos['id_producto'];
						?>
						<option value="<?php echo($id); ?>" <?php echo ($id == $arrLoad['id']) ? "selected" : ""; ?> > <?php echo ($id." - ".$nombre); ?></option>
						<?php
					}
					?>
				</select>

				<label for="name">Nombre</label>
				<input name="name" type="text" class="form-control" id="name" aria-describedby="name" value="<?php echo($arrLoad['nombre']); ?>">

				<label for="ubication">Ubicacion</label>
				<input name="ubication" type="text" class="form-control" id="ubication" aria-describedby="ubication" value="<?php echo($arrLoad['ubicacion']); ?>">

				<label for="serial">Serial de Producto</label>
				<input name="serial" type="text" class="form-control" id="serial" aria-describedby="serial" value="<?php echo($arrLoad['serial']); ?>">

				<label for="fabricant">fabricante</label>
				<input name="fabricant" type="text" class="form-control" id="fabricant" aria-describedby="fabricant"value="<?php echo($arrLoad['fabricante']); ?>">

				<label for="objProduct">Observaciones</label>
				<input name="objProduct" type="text" class="form-control" id="objProduct" aria-describedby="objProduct" value="<?php echo($arrLoad['observacion']); ?>">

				<label for="description">Descripcion</label>
				<input name="description" type="text" class="form-control" id="description" aria-describedby="description" value="<?php echo($arrLoad['descripcion']); ?>">

				<label for="img">Imagenes</label>
				<input type="text" name="id_img" value="<?php echo($arrLoad['name_evid']); ?>" hidden>
				<input name="img" type="file" class="form-control" id="img" aria-describedby="img">
				<input type="text" name="img2" class="form-control" value="<?php echo($arrLoad['name_evid']); ?>" 
				<?php echo ($arrLoad['name_evid'] !== NULL) ? "style='height: 18px; font-size: 12px; background-color: #63FAB9;'" . "readonly" : "style='height: 18px; font-size: 12px; background-color: white'" . "hidden";?> >

				<label for="category">Categoria</label>
				<select class="form-control" id="category" name="category">
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM categoria order by nombre_categoria asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_categoria'];
						$id = $datos['id_categoria'];
						?>
						<option value="<?php echo($id); ?>" <?php echo ($id == $arrLoad['categoria']) ? 'selected' : ""; ?> > <?php echo ($nombre); ?></option>
						<?php
					}
					?>
				</select>

				<label for="condition">Condicion</label>
				<select class="form-control" id="condition" name="condition">
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM condicion order by nombre_condicion asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_condicion'];
						$id = $datos['id_condicion'];
						?>
						<option value="<?php echo($id); ?>" <?php echo ($id == $arrLoad['condicion']) ? "selected" : ""; ?> > <?php echo ($nombre); ?></option>
						<?php
					}
					?>
				</select>

				<label for="status">Estado</label>
				<select class="form-control" id="status" name="status">
					<option value="">Seleccione Una...</option>
					<?php
					$sql="SELECT * FROM estado order by nombre_estado asc";
					@$result= mysqli_query($conn,$sql);
					while($datos=mysqli_fetch_array($result)){
						$nombre = $datos['nombre_estado'];
						$id = $datos['id_estado'];
						?>
						<option value="<?php echo($id); ?>" <?php echo ($id == $arrLoad['estado']) ? "selected" : ""; ?> > <?php echo ($nombre); ?></option>
						<?php
					}
					?>
				</select>

				<label for="accion">Accion</label>
				<input name="accion" type="text" class="form-control" id="accion" aria-describedby="accion" value="<?php echo($arrLoad['accion']); ?>">

			</div>


			<button type="submit" name="trigger" value="loadData" class="btn btn-primary">Cargar Datos</button>
			<button type="submit" name="trigger" value="updateProducts" class="btn btn-primary">Guardar Cambios</button>

		</form>

		<hr>
		<a href="../stock/managerStock.php" class="btn active" role="button" aria-pressed="true">Regresar...</a>
	</center>
</fieldset>
</body>
</html>
<?php
mysqli_close($conn);
//session_destroy();
?>