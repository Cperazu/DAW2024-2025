<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

const FICHERO = '/datos/programacionVuelos.xml';

$request = json_decode(trim(file_get_contents("php://input")), true);
if ($request) $request = $request['data'];

$doc = new DOMDocument();
$doc->load(FICHERO);
$xpath = new DOMXPath($doc);

if ($request['accion'] == 'cargar') {
    $result = $xpath->query('//@numVuelo');
    $codigoVuelos = [];
    foreach ($result as $vuelo) {
        $codigoVuelos[] = $vuelo->value;
    }
    echo json_encode([
        "codigoVuelos" => $codigoVuelos
    ]);
    die();
}

if ($request['accion'] == 'obtenerLlegadaSalida') {
    $result = $xpath->query('//datosVuelo[@numVuelo="' . $request['codigoVuelo'] . '"]//parent::node()');
    $tipo = $result['0']->tagName;
    echo json_encode(['tipo' => $tipo]);
}

if ($request['accion'] == 'obtenerDetallesVuelo') {
    $xml = simplexml_load_file(FICHERO);
    $result = $xml->xpath('//datosVuelo[@numVuelo="' . $request['codigoVuelo'] . '"]');
    echo json_encode(['detalles' => $result[0]]);
    die();
}

if (isset($_POST["accion"]) && $_POST["accion"] == "guardar") {
    $xml = simplexml_load_file(FICHERO);
    $json = json_encode($xml);
    $vuelos = json_decode($json, true);
    print_r($vuelos);
    die();
}

// Función recursiva para convertir un array en XML
/*function arrayToXml($data, &$xmlData)
{
    foreach ($data as $key => $value) {
        // Si el valor es un array
        if (is_array($value)) {
            // Manejar atributos si existen
            if (isset($value['@attributes'])) {
                $subnode = $xmlData->addChild($key);

                // Agregar los atributos
                foreach ($value['@attributes'] as $attrKey => $attrValue) {
                    $subnode->addAttribute($attrKey, htmlspecialchars($attrValue));
                }

                // Verificar si también hay contenido textual
                if (isset($value['@value'])) {
                    $subnode[0] = htmlspecialchars($value['@value']);
                }
            } else {
                // Si no hay atributos, continuar normalmente
                $subnode = $xmlData->addChild($key);
                arrayToXml($value, $subnode);
            }
        } else {
            // Si es un valor simple, añadirlo como nodo
            $xmlData->addChild($key, htmlspecialchars($value));
        }
    }
}
$xmlData = new SimpleXMLElement('<?xml version="1.0"?><root></root>');
arrayToXml($vuelos, $xmlData);
echo $xmlData->asXML();*/

