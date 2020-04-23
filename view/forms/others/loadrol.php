<?php
//incluyendo conexion
include '../../controller/connection/connection.php';
//busqueda de datos en la base de datos
//recoriendo con el ciclo while los datos de la base de datos para mostrarlos en una lista
$query = mysqli_query($conn,"SELECT id_rol,descripcion_rol FROM rol_usuario");
?>
<select name="rol_usuario" class="select-option form-control" >
<?php while ($datos = mysqli_fetch_array($query)){?>

<option value="<?php echo $datos['id_rol']?>" <?php echo ($datos['id_rol'] == @$_SESSION['id_rol']) ? "SELECTED" : ""; ?>><?php echo $datos['descripcion_rol']?></option>
<?php
}
mysqli_close($conn);
?>
</select>

