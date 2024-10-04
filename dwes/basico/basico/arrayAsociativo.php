<?php

$persona["warner"] = ["dia" => "filántropo", "noche" => "caballero oscuro"];
$persona["marvel"] = [
    "dia" => "periodista",
    "noche" => "superman",
    "temporadas" => [
        "t1" => "LLegada a la tierra",
        "t2" => "Estudios universitarios"
    ],
    "favorita" => "s"
];


print_r($persona);
print_r(json_encode($persona));
