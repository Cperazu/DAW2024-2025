<?php

require 'comun.php';

if (file_exists(FICHERO)) {
    $personas = json_decode(file_get_contents(FICHERO), true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://vps456458.ovh.net/dwes/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://vps456458.ovh.net/dwes/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://vps456458.ovh.net/dwes/node_modules/apiFetch.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col bg-light">
            <form id="frmDatos">
                <div class="row g-3">
                    <div class="col">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"
                               aria-label="Nombre">
                    </div>
                    <div class="col">
                        <input type="text" id="edad" name="edad" class="form-control" placeholder="Edad"
                               aria-label="Edad">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="chkSexo" id="chkSexo1" value="Hombre">
                            <label class="form-check-label" for="chkSexo1">
                                Hombre
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="chkSexo" id="chkSexo2" value="Mujer">
                            <label class="form-check-label" for="chkSexo2">
                                Mujer
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" id="observaciones" name="observaciones" class="form-control"
                               placeholder="Observaciones"
                               aria-label="Observaciones">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col"></div>
                    <div class="col">
                        <button type="button" class="btn btn-primary" onclick="guardarDatos()">Enviar</button>
                    </div>
                </div>
        </div>
        </form>
        <div class="container-sm">
            <table id="tbDatos" class="table">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Observaciones</th>
                </tr>
                </thead>
                <tbody id="tbAgenda">
                <?php
                foreach ($personas as $persona) {
                    echo "<tr>";
                    echo "<td>" . $persona['nombre'] . "</td>";
                    echo "<td>" . $persona['edad'] . "</td>";
                    echo "<td>" . $persona['sexo'] . "</td>";
                    echo "<td>" . $persona['observaciones'] . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
<script>
    var datos = new Object();

    function guardarDatos() {
        datos.nombre = document.getElementById("nombre").value;
        datos.edad = document.getElementById("edad").value;
        datos.chkSexo = document.getElementById("chkSexo1").checked ?
            document.getElementById("chkSexo1").value
            :
            document.getElementById("chkSexo2").value;
        datos.observaciones = document.getElementById("observaciones").value;
        postData("procesarForm04.php", {
            data: datos
        }).then((data) => {
            document.getElementById("tbDatos").insertAdjacentHTML("afterbegin",data.html);
        });
    }
</script>
</html>