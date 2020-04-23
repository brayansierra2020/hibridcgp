<?php
class ControllerDedicatedProducts{
	public static function saveProducts() {
		require_once ('../connection/connection.php');
		include_once ('../../model/phpqrcode/qrlib.php');

		$name = strtoupper(@$_POST["name"]);
		$ubication = strtoupper(@$_POST["ubication"]);
		$serial = strtoupper(@$_POST["serial"]);
		$fabricant = strtoupper(@$_POST["fabricant"]);
		$objProduct = strtoupper(@$_POST["objProduct"]);
		$description = strtoupper(@$_POST["description"]);
		$category = strtoupper(@$_POST["category"]);
		$condition = strtoupper(@$_POST["condition"]);
		$status = strtoupper(@$_POST["status"]);

		date_default_timezone_set("America/Bogota");
		$timestamp = date('Y-m-d-H:i:s');

		$nimg = $_FILES['img']['name'];
		$nimgr = "[".$timestamp."]".str_replace(" ", "", strtolower($nimg));
		$cd=$_FILES['img']['tmp_name'];
		$ruta = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/images/" . $nimgr;
		$destino = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/images/";
		$resultado = @move_uploaded_file($_FILES["img"]["tmp_name"], $ruta);


		try {

			$sql = "INSERT INTO `producto` (`id_producto`, `nombre_producto`, `ubicacion`, `cod_serial`, `fabricante`, `observ_product`, `desc_product`, `categoria_id_categoria`, `condicion_id_condicion`, `estado_id_estado`) VALUES (NULL, '$name', '$ubication', '$serial', '$fabricant', '$objProduct', '$description', '$category', '$condition', '$status')";

			$timesql = "INSERT INTO `timestamps` (`create_time`, `update_time`, `id_times`, `producto_id_producto`, `persona_cod_empleado`, `solicitud_id_solicitud`, `evidencia_id_evidencia`) VALUES (current_timestamp(), NULL, NULL,(SELECT `id_producto` FROM `producto` WHERE `cod_serial` = '$serial'), NULL, NULL, NULL)";


				$sqlimg = "INSERT INTO `evidencia` (`name_evid`, `ruta_evid`, `produc_evid`) 
				VALUES ('$nimgr', '$destino', (SELECT `id_producto` FROM `producto` WHERE `cod_serial` = '$serial'))"; 

				$timesqlimg = "INSERT INTO `timestamps` (`create_time`, `update_time`, `id_times`, `producto_id_producto`, `persona_cod_empleado`, `evidencia_id_evidencia`, `solicitud_id_solicitud`) VALUES (current_timestamp(), NULL, NULL,NULL, NULL, (SELECT `id_evidencia` FROM `evidencia` WHERE `name_evid` = '$nimgr'), NULL)";



				$conn->query($sql);
				$conn->query($timesql);

				$conn->query($sqlimg);
				$conn->query($timesqlimg);


				$datos = @mysqli_query($conn, "SELECT `id_producto` FROM `producto` WHERE `cod_serial` = '$serial'");
				while ($codigo = mysqli_fetch_array($datos)){
					$cod = $codigo['id_producto'];
					$nqrcode = "qrcode_".$cod.".png";
					$pathqr = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/qrcode/";
					$patchfull = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/qrcode/"."qrcode_".$codigo['id_producto'].".png";
					QRcode::png($cod, $pathqr."qrcode_".$cod.".png", "L", 5, 4);

					$qrinsert = "INSERT INTO `qrcode`(`rutaqr`, `nombre_qr`, `producto_id_producto`) VALUES ('$patchfull', '$nqrcode', (SELECT `id_producto` FROM `producto` WHERE `cod_serial` = '$serial'))";

					$conn->query($qrinsert);
				}

				$conn->commit();
				mysqli_close($conn);

				header("Location: ../../view/forms/products/addProduct.php?msg=imagen guardada");



		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function loadData(){
		require_once ('../connection/connection.php');

		$id = @$_POST['id'];
		$sql = "SELECT * FROM load_data WHERE id_producto = '$id'";
		@$result= mysqli_query($conn,$sql);
		$arrLoad = array();
		while($datos=mysqli_fetch_array($result)){
			
				$arrLoad['id'] = $datos['id_producto'];
				$arrLoad['nombre'] = $datos['nombre_producto']; 
				$arrLoad['ubicacion'] = $datos['ubicacion']; 
				$arrLoad['serial'] = $datos['cod_serial'];  
				$arrLoad['fabricante'] = $datos['fabricante'];
				$arrLoad['observacion'] = $datos['observ_product']; 
				$arrLoad['descripcion'] = $datos['desc_product']; 
				$arrLoad['categoria'] = $datos['id_categoria']; 
				$arrLoad['condicion'] = $datos['id_condicion']; 
				$arrLoad['estado'] = $datos['id_estado']; 
				$arrLoad['accion'] = $datos['accion'];
				$arrLoad['id_evid'] = $datos['id_evidencia']; 
				$arrLoad['name_evid'] = $datos['name_evid']; 
				$arrLoad['id_time'] = $datos['id_times']; 
			
		}
		$arrSerialized = serialize($arrLoad);
		header("Location: ../../view/forms/products/editProduct.php?load=$arrSerialized");

	}


	public static function updateProducts() {
		require_once ('../connection/connection.php');

		$id = @$_POST['id'];
		$name = strtoupper(@$_POST["name"]);
		$ubication = strtoupper(@$_POST["ubication"]);
		$serial = strtoupper(@$_POST["serial"]);
		$fabricant = strtoupper(@$_POST["fabricant"]);
		$objProduct = strtoupper(@$_POST["objProduct"]);
		$description = strtoupper(@$_POST["description"]);
		$category = @$_POST["category"];
		$condition = @$_POST["condition"];
		$status = @$_POST["status"];
		$accion = strtoupper(@$_POST["accion"]);
		$id_img = @$_POST["id_img"];
		$imagen = $_FILES['img']['name'];
		$img2 = @$_POST["img2"];


		date_default_timezone_set("America/Bogota");
		$timestamp = date('Y-m-d-H:i:s');


		try {

			$sql = "UPDATE `producto` SET `nombre_producto`='$name',`ubicacion`='$ubication',`cod_serial`='$serial',`fabricante`='$fabricant',`observ_product`='$objProduct',`desc_product`='$description',`categoria_id_categoria`='$category',`condicion_id_condicion`='$condition',`estado_id_estado`='$status', `accion` = '$accion' WHERE `id_producto`= '$id'";

			$timesql = "UPDATE `timestamps` SET `update_time` = '$timestamp' WHERE `timestamps`.`id_times` = (SELECT `id_times` FROM `timestamps` WHERE `producto_id_producto` = '$id') ";

			if ($imagen == NULL) {
				$imgevid = "UPDATE `evidencia` SET `id_evidencia`='$id_img',`name_evid`='$img2' WHERE `produc_evid` = '$id'";
				$conn->query($imgevid);
			}else{

				$nimgr = "[".$timestamp."]".str_replace(" ", "", strtolower($imagen));
				$cd=$_FILES['img']['tmp_name'];
				$ruta = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/images/" . $nimgr;
				$resultado = @move_uploaded_file($_FILES["img"]["tmp_name"], $ruta);
				
				$imgevid = "UPDATE `evidencia` SET `id_evidencia`='$id_img',`name_evid`='$nimgr' WHERE `produc_evid` = '$id'";

				$conn->query($imgevid);

				if ($conn->affected_rows > 0) {
					$ruta_img = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/images/".$img2;
					if (file_exists($ruta_img)) {
						unlink($ruta_img);
					}
			}
				
			}



			$timesql_evid = "UPDATE `timestamps` SET `update_time` = '$timestamp' WHERE `timestamps`.`id_times` = (SELECT `id_times` FROM `timestamps` WHERE `evidencia_id_evidencia` = '$id_img') ";

			$conn->query($sql);
			$conn->query($timesql);
			$conn->query($timesql_evid);
			
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/products/editProduct.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}


	public static function deleteProducts() {
		require_once ('../connection/connection.php');

		$id = @$_POST['id'];
		$ruta_qr = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/qrcode/";
		$ruta_img = $_SERVER['DOCUMENT_ROOT']."/hibridcgp/images/";

		$res = mysqli_query($conn, "SELECT * FROM delete_products WHERE id_producto = '$id'");
		while($datos=mysqli_fetch_array($res)){
			$ruta_qr .= $datos['nombre_qr'];
			$ruta_img .= $datos['name_evid'];
		}

		try {

			$sql = "DELETE FROM `producto` WHERE `id_producto` = '$id'";
			$conn->query($sql);

			if ($conn->affected_rows > 0) {
				if (file_exists($ruta_qr)) {
					unlink($ruta_qr);
				}
				if (file_exists($ruta_img)) {
					unlink($ruta_img);
				}

			}
			
			$conn->commit();

			mysqli_close($conn);

			header("Location: ../../view/forms/products/deleteProduct.php");
		} catch (Exception $e) {

			$connection->rollback();
			echo 'Something fails: ',  $e->getMessage(), "\n";
			mysqli_close($conn);
		}
	}

	public static function listProducts(){
		header("Location: ../../view/forms/products/listProduct.php");
	}
}
?>
