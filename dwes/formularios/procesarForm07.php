<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

require 'comun.php';

$request = json_decode(trim(file_get_contents("php://input")), true);
$request = $request['data'];

$data = [];

if (file_exists(FICHERO)) {
    $data = json_decode(file_get_contents(FICHERO), true);
}


if ($request['accion'] == 'cargar') {
    echo json_encode(["html" => viewHtml($data)]);
    die();
}
if ($request['accion'] == 'enviar' or $request['accion'] == 'actualizar') {
    if (!empty($request["nombre"])) {
        $currentDateTime = new DateTime('now');
        $persona = [
            "nombre" => $request["nombre"],
            "edad" => $request["edad"],
            "sexo" => $request["chkSexo"],
            "observaciones" => $request["observaciones"],
            "fecha" => $currentDateTime->format('Y-m-d H:i:s')
        ];
        if ($request['accion'] == 'enviar') {
            $data[] = $persona;
        }
        if ($request['accion'] == 'actualizar') {
            $data[(int)$request['pos']] = $persona;
        }
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents(FICHERO, $jsonData);
        $data = json_decode(file_get_contents(FICHERO), true);
    }
    echo json_encode(["html" => viewHtml()]);
    die();
}

if ($request['accion'] == 'borrar') {
    $nuevaLista = [];
    foreach ($data as $item) {
        if ($request['token'] != base64_encode(json_encode($item))) {
            $nuevaLista[] = $item;
        }
    }
    $jsonData = json_encode($nuevaLista, JSON_PRETTY_PRINT);
    file_put_contents(FICHERO, $jsonData);

    echo json_encode(["html" => viewHtml()]);
    die();
}


function viewHtml($data = null): string
{
    if (!$data) {
        $data = json_decode(file_get_contents(FICHERO), true);
    }
    $html = null;
    foreach ($data as $k => $persona) {
        $html .= pintaFila($k, $persona);
    }
    return $html;
}
