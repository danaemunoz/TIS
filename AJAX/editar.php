<?php

include("conexion.php");

$id_recibido = $_GET["id_enviado"];
$consulta = "SELECT * FROM marcas WHERE id=".$id_recibido."";
$respuesta = mysqli_query($conexion, $consulta);

while($row = mysqli_fetch_assoc($respuesta)){
    $nombre = $row["nombre"];
    $origen = $row["origen"];
    $logo = $row["logo"];
    $id = $row["id"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clase11php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <div class="container p-4">
        <div class="row">
            <div class="col">
                <form action="editar_datos.php" method="POST">
                <input type="hidden" name ="id" value = "<?php echo $id ?>">
                    <div class="input-group mb-2">

                        <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                        <input type="text" name="nombre" value =  "<?php echo $nombre ?>" class="form-control" placeholder="Nissan" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">ORIGEN</span>

                        <select name="origen" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione una opcion</option>
                            <option value="japon" <?php echo $origen == "japon" ? "selected": null ?>>Japon</option>
                            <option value="china" <?php echo $origen == "china" ? "selected": null ?>>China</option>
                            <option value="francia" <?php echo $origen == "francia" ? "selected": null ?>>Francia</option>
                        </select>

                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" value =  "<?php echo $logo ?>" id="basic-addon1">LOGO</span>
                        <input type="text" name="logo" class="form-control" placeholder="logo-marca.jpg"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <input type="submit" value="GUARDAR" class="btn btn-primary">
                </form>
            </div>

            
        </div>
    </div>




</body>

</html>