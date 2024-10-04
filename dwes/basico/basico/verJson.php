<?php

$datosAlumno = [
    "datosPersonales" => ["nombre" => "Antonio", "edad" => 34],
    "ciudad" => "Málaga",
    "nick" => "莲花",
    "puntos" => 7.55
];

$datosSerializados = json_encode($datosAlumno);

print_r($datosAlumno);

echo $datosSerializados;
