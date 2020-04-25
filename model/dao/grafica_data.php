<?php
header('Content-Type: application/json');
require_once("../../controller/connection/connection.php");

  $data_points = array();

  $sql = "SELECT COUNT(*) as cantidad, DATE_FORMAT(fecha_ingreso, '%Y,%m,%d') as fecha FROM `movimentos` GROUP BY DATE_FORMAT(fecha_ingreso, '%Y-%m-%d')";

    $result = mysqli_query($conn, $sql); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("vx" => $row['fecha'], "vy" => $row['cantidad']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);



mysqli_close($conn);
?>