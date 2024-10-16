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
    <link href="http://vps456458.ovh.net/dwes/node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col bg-light">
            <form id="frmDatos">
                <div class="row g-3">
                    <div class="col">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre"
                               aria-label="Nombre">
                    </div>
                    <div class="col">
                        <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad"
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
                        <input type="text" name="observaciones" id="observaciones" class="form-control"
                               placeholder="Observaciones"
                               aria-label="Observaciones">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col"></div>
                    <div class="col">
                        <button id="butEnviar" type="button" class="btn btn-primary">Enviar</button>
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
    var peticion = new Object();
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById("butEnviar").addEventListener('click', guardarDatos);
        document.getElementById("nombre").value = "";
        document.getElementById("edad").value = "";
        document.getElementById("chkSexo2").checked = false;
        document.getElementById("chkSexo1").checked = false;
        document.getElementById("observaciones").value = "";
    });

    function editarDatos(pos) {
        const boton = document.getElementById("butEnviar");
        const fila = document.querySelector('[data-pos="' + pos + '"]');
        const token = fila.getAttribute("data-token");
        const datos = JSON.parse(atob(token));
        document.getElementById("nombre").value = datos.nombre;
        document.getElementById("edad").value = datos.edad;
        datos.sexo == "Mujer" ?
            document.getElementById("chkSexo2").checked = true
            :
            document.getElementById("chkSexo1").checked = true;
        document.getElementById("observaciones").value = datos.observaciones;
        peticion.pos = pos;
        boton.innerHTML = "Actualizar";
        boton.removeEventListener('click', guardarDatos)
        boton.addEventListener('click', actualizarDatos);
    }

    function guardarDatos() {
        peticion.pos = null;
        peticion.accion = "enviar";
        enviar();
    }

    function actualizarDatos() {
        peticion.accion = "actualizar";
        enviar();
    }

    function enviar() {
        peticion.nombre = document.getElementById("nombre").value;
        peticion.edad = document.getElementById("edad").value;
        peticion.chkSexo = document.getElementById("chkSexo1").checked ?
            document.getElementById("chkSexo1").value
            :
            document.getElementById("chkSexo2").value;
        peticion.observaciones = document.getElementById("observaciones").value;
        postData("procesarForm06.php", {
            data: peticion
        }).then(() => {
            window.location.reload();
        });
    }

    function borrarDatos(pos) {
        const fila = document.querySelector('[data-pos="' + pos + '"]');
        peticion.token = fila.getAttribute("data-token");
        peticion.accion = "borrar";
        fila.remove();
        postData("procesarForm06.php", {
            data: peticion
        }).then(() => {
            window.location.reload();
        });
    }
</script>
</html>