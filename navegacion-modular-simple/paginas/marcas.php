<?php

include("conexion.php");
$consulta = "SELECT * FROM marcas";
$respuesta = mysqli_query($conexion, $consulta);

?>

<div class="container p-5">
        <div class="row">
            <div class="col">
                <form action="consultas/insertar.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">nombre</span>
                        <input type="text" class="form-control" name="nombre" placeholder="peugeot">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" name="origen">
                            <option selected>origen</option>
                            <option value="1">japon</option>
                            <option value="2">francia</option>
                            <option value="3">china</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">logo</span>
                        <input type="text" class="form-control" name="logo" placeholder="../logo_peugeot.png">
                    </div>
                    <button type="submit" class="btn btn-danger">insertar</button>
                </form>
            </div>
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">origen</th>
                            <th scope="col">logo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($respuesta)) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["nombre"] . "</td>";
                            echo "<td>" . $row["origen"] . "</td>";
                            echo "<td>" . $row["logo"] . "</td>";

                            echo "<td>";
                            echo "<a href= 'consultas/eliminar.php?id_enviado=" . $row["id"] . "'>";
                            echo "<button class=' btn btn-sm'> Eliminar</button>";
                            echo "</a>";
                            
                            echo "<a href= 'index.php?p=editar_marcas?id_enviado=" . $row["id"] . "'>";
                            echo "<button class=' btn btn-sm'> Editar</button>";
                            echo "</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>