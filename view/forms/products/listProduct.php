<?php
	include_once "../../../model/dao/show_products.php";
	include_once("../../../model/dao/acces_page.php"); 
?>
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
	<br>
	<br>
	<fieldset >
		<div class="card">
			<div class="card-body">
		<div>
			<div>
				<h1>Lista de Productos</h1>
			</div class="container">
			<table class="table table-bordered table-hover" style="font-weight: 20px;">
				<div class="table-responsive">
					<thead>
						<tr class="danger ">
							<th style="text-align: center;" scope="col">Codigo</th>
							<th style="text-align: center;" scope="col">Nombre</th>
							<th style="text-align: center;" scope="col">Serial</th>
							<th style="text-align: center;" scope="col">Ubicacion</th>
							<th style="text-align: center;" scope="col">Imagen</th>
							<th style="text-align: center;" scope="col">QR cod</th>
						</tr>
					</thead>

					<tbody>
						<?php while ($fila=mysqli_fetch_assoc($result)){ ?>
							<tr>
								<td style="color:#456789;font-size:80%; text-align: center;"><?php echo $fila['codigo']?></td>
								<td style="color:#456789;font-size:80%; text-align: center;"><?php echo $fila['nombre']?></td>
								<td style="color:#456789;font-size:80%; text-align: center;"><?php echo $fila['serial']?></td>
								<td style="color:#456789;font-size:80%; text-align: center;"><?php echo $fila['ubicacion']?></td>
								<td style="color:#456789;font-size:80%; text-align: center;">
								<img src="<?php echo $root_img.$fila['imagen']?>" alt="MISSING JPG" width="80px" height="80px"/> 
								</td>
								<td style="color:#456789;font-size:80%; text-align: center;">
									<img src="<?php echo $root_qr.$fila['qrname']?>" alt="MISSING JPG" width="80px" height="80px"/> 
								</td>
							</tr>   
						<?php }?>
					</tbody>
				</div>
			</table>
		</div>
	</div>
</div>
	</fieldset>
	<a href="../stock/managerStock.php" class="btn btn-secundary btn-lg active" role="button" aria-pressed="true">Regresar...</a>
</center>

</body>
