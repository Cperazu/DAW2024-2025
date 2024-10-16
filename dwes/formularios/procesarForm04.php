<?php

require 'comun.php';

$request = json_decode(trim(file_get_contents("php://input")), true);
$request = $request['data'];

$data = [];

if (file_exists(FICHERO)) {
    $data = json_decode(file_get_contents(FICHERO), true);
}

$html = null;

$currentDateTime = new DateTime('now');
if (!empty($request["nombre"])) {
    $nuevoDato = [
        "nombre" => $request["nombre"],
        "edad" => $request["edad"],
        "sexo" => $request["chkSexo"],
        "observaciones" => $request["observaciones"],
        "fecha" => $currentDateTime->format('Y-m-d H:i:s')
    ];
    $data[] = $nuevoDato;
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents(FICHERO, $jsonData);
    $html = '<tr class="bg-primary text-white">' .
        '<td>' . $nuevoDato['nombre'] . '</td>' .
        '<td>' . $nuevoDato['edad'] . '</td>' .
        '<td>' . $nuevoDato['sexo'] . '</td>' .
        '<td>' . $nuevoDato['observaciones'] . '</td>' .
        '</tr>';
}

echo json_encode(["html" => $html,"demoPieza" =>$currentDateTime->format('Y-m-d H:i:s')]);
