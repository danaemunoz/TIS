<?php
include("../conexion.php");

$nombre_recibido = $_POST ["nombre"];
$origen_recibido = $_POST ["origen"];
$logo_recibido = $_POST ["logo"];
$insert = "INSERT INTO marcas (nombre, origen, logo) VALUES ('$nombre_recibido','$origen_recibido','$logo_recibido')";
$resultado = mysqli_query($conexion, $insert);

header("Location: ../index.php?p=marcas");

?>
