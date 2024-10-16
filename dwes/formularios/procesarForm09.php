<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

const FICHERO = '/datos/nominas.xml';

$request = json_decode(trim(file_get_contents("php://input")), true);
$request = $request['data'];

$xml = null;

if (file_exists(FICHERO)) {
    $xml = simplexml_load_file(FICHERO);
}

if ($request['accion'] == 'cargar') {
    echo json_encode(["html" => viewHtml($xml)]);
    die();
}

if ($request['accion'] == 'enviar' or $request['accion'] == 'actualizar') {
    if (!empty($request["nombre"])) {
        $currentDateTime = new DateTime('now');
        if ($request['accion'] == 'enviar') {
            $nomina = $xml->addChild('nomina');
            $nomina->addChild("nombre", $request["nombre"]);
            $nomina->addChild("fechaAlta", $request["fecha"]);
            $nomina->addChild("bruto", $request["bruto"]);
            $nomina->addChild("irpf", $request["irpf"]);
        }
        if ($request['accion'] == 'actualizar') {
            $xml->nomina[(int)$request['pos']]->nombre = $request["nombre"];
            $xml->nomina[(int)$request['pos']]->fechaAlta = $request["fecha"];
            $xml->nomina[(int)$request['pos']]->bruto = $request["bruto"];
            $xml->nomina[(int)$request['pos']]->irpf = $request["irpf"];
        }
       file_put_contents(FICHERO, $xml->asXML());
    }
    echo json_encode(["html" => viewHtml()]);
    die();
}

if ($request['accion'] == 'borrar') {
    $kBorrar = null;
    $k = 0;
    foreach ($xml->nomina as $persona) {
        if ($request['token'] == base64_encode($persona->asXML())) {
            $kBorrar = $k;
        }
        $k++;
    }
    if ($kBorrar) {
        unset($xml->nomina[$kBorrar]);
        file_put_contents(FICHERO, $xml->asXML());
    }
    die();
}

function viewHtml($xml = null)
{
    if (!$xml) {
        $xml = simplexml_load_file(FICHERO);
    }
    $html = null;
    $k = 0;
    foreach ($xml->nomina as $persona) {
        $html .= pintaFila($k, $persona);
        $k++;
    }
    return $html;
}

function pintaFila(int $k, SimpleXMLElement $item, $clase = '')
{
    $data = base64_encode($item->asXML());
    return "<tr data-pos='" . $k . "' data-token='" . $data . "' " . (empty($clase) ? '' : 'class="' . $clase . '"') . ">" .
        "<td>" . $item->nombre . "</td>" .
        "<td>" . $item->fechaAlta . "</td>" .
        "<td>" . $item->bruto . "</td>" .
        "<td>" . $item->irpf . "</td>" .
        "<td><i class='fa-solid fa-trash' onclick='borrarDatos(\"" . $k . "\")'></i>&nbsp;&nbsp;" .
        "<i class='fa-solid fa-pen-to-square' onclick='editarDatos(\"" . $k . "\")'></i></td>" .
        "</tr > ";
}