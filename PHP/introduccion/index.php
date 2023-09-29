<?php

include("conexion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerciciosphp</title>
</head>
<body>

    <?php

    $consulta = "SELECT * FROM alumnos";
    $respuesta = mysqli_query($conexion, $consulta);
    
    while($row = mysqli_fetch_assoc($respuesta)){
        echo "<b> El nombre es: " .$row["nombre"]. "</b>";
        echo "<br>";
        echo " <b>El correo es: </b>" .$row["apellido"];
        echo "<br>";
        echo " <b>El nombre es: </b>" .$row["correo"];
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    ?>

</body>
</html>