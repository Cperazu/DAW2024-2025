<?php declare(strict_types=1);

function foo(int $a, int $b, string $c): array
{
    $a = $a * 5;
    $b = $b - 3;
    $c = strlen($c);

    return ["a" => $a, "b" => $b, "c" => $c];
}

function bar($a, int $b = 5, int $c = 10): array
{
    return ["a" => $a, "b" => $b, "c" => $c];
}

$result = foo(5, 45, "Hola daw");

//Para clase de PHP uso...
//print_r($result);

//Para el cliente uso...
//echo json_encode($result, JSON_UNESCAPED_UNICODE);

print_r(bar(5));
print_r(bar(5, 12));
print_r(bar(5, 12, 180));

