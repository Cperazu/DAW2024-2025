<?php

const BUSCADO = '8';

$inicio = microtime(true);

$distritos = [
    "1" => ["num" => "1", "nombre" => "Centro"],
    "3" => ["num" => "3", "nombre" => "Ciudad Jardín"],
    "8" => ["num" => "8", "nombre" => "Churriana"],
    "4" => ["num" => "4", "nombre" => "Bailén - Miraflores"],
    "5" => ["num" => "5", "nombre" => "Palma - Palmilla"],
    "6" => ["num" => "6", "nombre" => "Cruz de Humilladero"],
    "7" => ["num" => "7", "nombre" => "Carretera de Cádiz"],
    "2" => ["num" => "2", "nombre" => "Este"],
    "9" => ["num" => "9", "nombre" => "Campanillas"],
    "10" => ["num" => "10", "nombre" => "Puerto de la Torre"],
    "11" => ["num" => "11", "nombre" => "Teatinos - Universidad"]
];

if ($distritos[BUSCADO]) {
    echo "encontrado " . PHP_EOL;
    print_r($distritos[BUSCADO]);
    echo PHP_EOL;
    $fin = number_format(microtime(true) - $inicio, 4);
    echo "El distrito encontrado es {$distritos[BUSCADO]['nombre']}";
    echo " en {$fin}";
    echo PHP_EOL;
    die();
}