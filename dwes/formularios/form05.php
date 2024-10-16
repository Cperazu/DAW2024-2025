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
    <script src="http://vps456458.ovh.net/dwes/node_modules/jquery/dist/jquery.min.js"></script>
    <link href="http://vps456458.ovh.net/dwes/node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col bg-light">
            <form id="frmDatos">
                <div class="row g-3">
                    <div class="col">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre">
                    </div>
                    <div class="col">
                        <input type="text" name="edad" class="form-control" placeholder="Edad" aria-label="Edad">
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
                        <input type="text" name="observaciones" class="form-control" placeholder="Observaciones"
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
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody id="tbAgenda">
                <?php
                foreach ($personas as $k => $persona) {
                    echo pintaFila($k, $persona);
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

    function guardarDatos() {
        $.ajax({
            type: "POST",
            url: "procesarForm05.php",
            data: $("#frmDatos").serialize() + "&accion=enviar"
        }).done(function (data) {
            const piezas = $.parseJSON(data);
            $("#tbDatos").prepend(piezas.html);
        });
    }

    function borrarDatos(pos) {
        const fila = document.querySelector('[data-pos="' + pos + '"]');
        const item = fila.getAttribute("data-token");
        $.ajax({
            type: "POST",
            url: "procesarForm05.php",
            data: {"item": item, "accion": "borrar"}
        }).done(function () {
            fila.remove();
        });
    }
</script>
</html>