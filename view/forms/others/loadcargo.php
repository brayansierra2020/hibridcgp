<?php
//incluyendo conexion
include '../../controller/connection/connection.php';
//busqueda de datos en la base de datos
//recoriendo con el ciclo while los datos de la base de datos para mostrarlos en una lista
$query = mysqli_query($conn,"SELECT * FROM cargo");
?>
<select name="cargo" class="select-option form-control input-md">
<?php while ($datos = mysqli_fetch_array($query)){
?>

<option value="<?php echo $datos['id_cargo'];?>" <?php echo ($datos['id_cargo'] == @$_SESSION['id_cargo']) ? 'selected' : ""; ?> >
	<?php echo $datos['nombre_cargo'];?>
</option>


<?php
}
mysqli_close($conn);
?>
</select>