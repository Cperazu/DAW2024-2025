<?php

const RESULTADOS = ["0", "1", "2", "M"];
const RESULTADOS1x2 = ["0", "1", "x"];
const ITEM_QUINIGOL = ["0", "1", "2", "M"];
const ITEM_QUINIELA = 14;

/*Genera un array multidimensional con 6
   resultados aleatorios con combinaciones [012M, 012M]
*/

$resultRand = arry_rand(RESULTADOS, 2);
console.log($resultRand);
