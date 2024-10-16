<?php

require "./comunPrueba02.php";
$datos = [];

if (file_exists(FICHERO)) {
    $datos = json_decode(file_get_contents(FICHERO), true);
}

if (!empty($_POST["titulo"])){
    $nuevosDatos = [
        "titulo" => $_POST["titulo"],
        "autor" => $_POST["autor"]
    ];
    $datos[] = $nuevosDatos;
    $datosJSON = json_encode($datos, JSON_PRETTY_PRINT);
    file_put_contents(FICHERO, $datosJSON);
};
header('location:prueba02.php');
