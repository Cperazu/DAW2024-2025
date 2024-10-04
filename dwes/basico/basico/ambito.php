<?php

$edad = 15;
$nombre = "Juan";


//Función
function foo($nombre)
{
    $result = "Ana". " y ".$nombre;
    return $result;
}

//Procedimiento
function bar($a, &$b, $c)
{
    $a = 5;
    $b = 33333336;
    $c = 5;
}

$a = 6;
$b = 5;
$c = 15;
bar($a, $b, $c);
echo $a . PHP_EOL;
echo $b . "<br>";
echo $c . PHP_EOL;
echo foo($nombre).PHP_EOL;

