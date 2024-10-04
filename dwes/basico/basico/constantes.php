<?php
//Ctes. del lenguaje-entorno
//print_r($_ENV);
//print_r($_SERVER);

//Ctes.mágicas
print_r(__DIR__);
echo PHP_EOL;
print_r(__CLASS__);
echo PHP_EOL;

//Ctes. definidas por el usuario
define('TOPE',150);

const DIA_SEMANA ='Martes';
const DIAS_SEMANA =['Lunes','Martes'];

echo "uso de las constantes".PHP_EOL;
echo TOPE;
echo PHP_EOL;
echo DIA_SEMANA;
echo PHP_EOL;

