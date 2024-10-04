<?php declare (strict_types=1);

$nombre = $_POST['nombre'] . " iesportada";
$edad = (int)$_POST['edad'] + 5;

$result =["nombre" => $nombre, "edad" => $edad];

echo json_encode($result);

