<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

const FICHERO = '/datos/nominas.json';

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
            "fecha" => $request["fecha"],
            "bruto" => $request["bruto"],
            "irpf" => $request["irpf"],
            "time" => $currentDateTime->format('Y-m-d H:i:s')
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


function viewHtml($data = null)
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
function pintaFila(int $k, array $item, $clase = '')
{
    $data = base64_encode(json_encode($item));
    return "<tr data-pos='" . $k . "' data-token='" . $data . "' " . (empty($clase) ? '' : 'class="' . $clase . '"') . ">" .
        "<td>" . $item['nombre'] . "</td>" .
        "<td>" . $item['fecha'] . "</td>" .
        "<td>" . $item['bruto'] . "</td>" .
        "<td>" . $item['irpf'] . "</td>" .
        "<td><i class='fa-solid fa-trash' onclick='borrarDatos(\"" . $k . "\")'></i>&nbsp;&nbsp;" .
        "<i class='fa-solid fa-pen-to-square' onclick='editarDatos(\"" . $k . "\")'></i></td>" .
        "</tr > ";
}