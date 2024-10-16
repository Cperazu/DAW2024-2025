<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

const FICHERO = '/datos/eventoTrafico.xml';

$request = json_decode(trim(file_get_contents("php://input")), true);
$request = $request['data'];

$xml = null;

if (file_exists(FICHERO)) {
    $xml = simplexml_load_file(FICHERO);
}

if ($request['accion'] == 'cargar') {
    $strHtml = "<table class='table'>";
    foreach ($xml->Evento as $evento) {
        $strHtml .= '<tr>';
        $strHtml .= '<td>' . $evento->senalAccidente . '</td>';
        $strHtml .= '<td>' . $evento->puntoKilometrico . '</td>';
        /*$strHtml.='<td>'..'</td>';
        $strHtml.='<td>'..'</td>';
        $strHtml.='<td>'..'</td>';
        $strHtml.='<td>'..'</td>';
        $strHtml.='<td>'..'</td>';*/
        $strHtml .= '</tr>';
    }
    $strHtml .= '</table>';
    echo json_encode(["strHtml" => $strHtml]);
}

if (!empty($_POST["nombreVia"])) {
    if ($_POST['accion'] == 'guardar') {
        $nomina = $xml->addChild('Evento');
        $nomina->addChild("senalAccidente", $_POST["senalAccidente"]);
        $nomina->addChild("puntoKilometrico", $_POST["puntoKilometrico"]);
        $nomina->addChild("nombreVia", $_POST["nombreVia"]);
        $nomina->addChild("sentido", $_POST["sentido"]);
        $nomina->addChild("corteVia", $_POST["corteVia"]);
        $nomina->addChild("fechaHoraEvento", $_POST["fechaHoraEvento"]);
        $nomina->addChild("retencion", $_POST["retencion"]);
    }
    file_put_contents(FICHERO, $xml->asXML());
}
