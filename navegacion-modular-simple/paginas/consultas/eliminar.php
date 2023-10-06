<?php
include("conexion.php");
$id_recibido = $_GET["id_enviado"];


$delete = "DELETE FROM marcas WHERE id = ".$id_recibido.";";
$resultado = mysqli_query($conexion, $delete);

header("Location: index.php");

?>