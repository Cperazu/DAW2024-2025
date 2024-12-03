<?php

$hora = $_POST['hora'];

if (6 <= $hora && $hora <= 12) {
    echo 'buenos días','<br>';
} else if (13 <= $hora && $hora <= 20) {
    echo 'buenas tarder', '<br>';
} else {
    echo 'buenas noches', '<br>';
}