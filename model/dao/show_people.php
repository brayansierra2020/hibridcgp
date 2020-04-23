<?php
	require_once '../../controller/connection/connection.php';
	 
    $consulta = "SELECT * FROM `show_people` ";

	$resultado = mysqli_query($conn,$consulta);

?>