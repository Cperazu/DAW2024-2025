<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

require 'comun.php';

$data = [];

if (file_exists(FICHERO)) {
    $data = json_decode(file_get_contents(FICHERO), true);
}

$html = null;

if ($_POST['accion'] == 'enviar') {
    if (!empty($_POST["nombre"])) {
        $currentDateTime = new DateTime('now');
        $nuevoDato = [
            "nombre" => $_POST["nombre"],
            "edad" => $_POST["edad"],
            "sexo" => $_POST["chkSexo"],
            "observaciones" => $_POST["observaciones"],
            "fecha" => $currentDateTime->format('Y-m-d H:i:s')
        ];
        $data[] = $nuevoDato;
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents(FICHERO, $jsonData);

        $nuevaFila = count($data);
        $html = pintaFila($nuevaFila, $nuevoDato, "bg-primary text-white");
    }
    echo json_encode(["html" => $html]);
    die();
}
if ($_POST['accion'] == 'borrar') {

    $nuevaLista = [];
    foreach ($data as $item) {
        if ($_POST['item'] != base64_encode(json_encode($item))) {
            $nuevaLista[] = $item;
        }
    }
    $jsonData = json_encode($nuevaLista, JSON_PRETTY_PRINT);
    file_put_contents(FICHERO, $jsonData);
}

