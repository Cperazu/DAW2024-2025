<?php declare(strict_types=1);

function diaSemana(int $numDia): string
{
    $semana = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
    return $semana[$numDia];
}

$numDia = 1.9;
$diaCine = diaSemana((int)$numDia);
echo "El próximo " . $diaCine . " voy al cine.".PHP_EOL;

