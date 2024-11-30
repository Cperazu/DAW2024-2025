<?php 

$base = $_POST['base'];
$altura = $_POST['altura'];
$resultado = ($base*$altura)/2;
echo 'El área de un triángulo de base ', $base, ' y altura ', $altura, ' es igual a : ', $resultado;