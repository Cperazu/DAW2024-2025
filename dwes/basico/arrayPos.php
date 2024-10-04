<?php

const BUSCADO = '8';

$inicio = microtime(true);

$distritos = [
    ["num" => "1", "nombre" => "Centro"],
    ["num" => "2", "nombre" => "Este"],
    ["num" => "4", "nombre" => "Bailén - Miraflores"],
    ["num" => "5", "nombre" => "Palma - Palmilla"],
    ["num" => "6", "nombre" => "Cruz de Humilladero"],
    ["num" => "7", "nombre" => "Carretera de Cádiz"],
    ["num" => "9", "nombre" => "Campanillas"],
    ["num" => "11", "nombre" => "Teatinos - Universidad"],
    ["num" => "3", "nombre" => "Ciudad Jardín"],
    ["num" => "10", "nombre" => "Puerto de la Torre"],
    ["num" => "8", "nombre" => "Churriana"],
];

$encontrado = null;

foreach ($distritos as $k => $distrito) {
    if ($distrito["num"] == BUSCADO) {
        echo "encontrado " . PHP_EOL;
        print_r($distrito);
        $encontrado = $k;
        break;
    }
}
echo PHP_EOL;
echo "El distrito encontrado es " . $distritos[$encontrado]['nombre'];
echo " en " . number_format(microtime(true) - $inicio, 4) . PHP_EOL;
