<?php

include("conexion.php");
$id_recibido = $_GET["id_enviado"];
$consulta = "SELECT * FROM marcas WHERE id=".$id_recibido."";
$respuesta = mysqli_query($conexion, $consulta);

while ($row = mysqli_fetch_assoc($respuesta)) {
   
    $nombre = $row["nombre"];
    $origen = $row["origen"];
    $logo = $row["logo"];
    $id = $row["id"];
} 

?>

    <div class="container p-5">
        <div class="row">
            <div class="col">
                <form action="consultas/editar_datos.php" method="POST">
                    <input type="text" class="d-none" name="id" value="<?php echo $id ?>">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                        <input type="text" name="nombre" class="form-control" placeholder="Peugeot" value =" <?php echo $nombre ?>" required>
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Origen</span>
                        <select class="form-select" name="origen"   aria-label="Default select example">
                        <option selected>Listado</option>
                        <option value="japon" <?php echo $origen == "japon" ? "selected": null ?>>Japón</option>
                        <option value="china" <?php echo $origen == "china" ? "selected": null ?>>China</option>
                        <option value="francia" <?php echo $origen == "francia" ? "selected": null ?>>Francia</option>
                    </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">logo</span>
                        <input type="text" name="logo" class="form-control" placeholder="../logo-Peugeot.jpg"  value =" <?php echo $logo ?>">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>


        </div>
    </div>
