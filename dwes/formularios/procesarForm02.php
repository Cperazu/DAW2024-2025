<?php

require 'comun.php';

$data = [];

if (file_exists(FICHERO)) {
    $data = json_decode(file_get_contents(FICHERO), true);
}

$currentDateTime = new DateTime('now');
if (!empty($_POST["nombre"])) {
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
}
header('location:form02.php');
