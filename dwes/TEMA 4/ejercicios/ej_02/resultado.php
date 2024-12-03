<?php

$n = $_POST['numDia'];

switch ($n) {
    case 1:
        echo 'Lunes', '<br>';
        break;
    case 2:
        echo 'Martes', '<br>';
        break;
    case 3:
        echo 'Miércoles', '<br>';
        break;
    case 4:
        echo 'Jueves', '<br>';
        break;
    case 5:
        echo 'Virenes', '<br>';
        break;
    case 6:
        echo 'Sábado', '<br>';
        break;
    case 7:
        echo 'Domingo', '<br>';
        break;
    default:
        echo 'Introduce un valor correcto pedazo de bobo. DEL 1 AL 7 !!!', '<br>';
        break;
}
