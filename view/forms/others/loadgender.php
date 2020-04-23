<?php
//incluyendo conexion
include '../../controller/connection/connection.php';
//busqueda de datos en la base de datos
//recoriendo con el ciclo while los datos de la base de datos para mostrarlos en una lista
$query = mysqli_query($conn,"SELECT id_genero,nombre_genero FROM genero");
?>
<select name="genero" class="select-option form-control input-md">
<?php while ($datos = mysqli_fetch_array($query)){?>

<option value="<?php echo $datos['id_genero']?>" <?php echo ($datos['id_genero'] == @$_SESSION['id_genero']) ? "SELECTED" : ""; ?> ><?php echo $datos['nombre_genero']?></option>
<?php
}
mysqli_close($conn);
?>
</select>