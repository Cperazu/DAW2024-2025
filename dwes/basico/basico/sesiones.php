<?php

session_start();
echo session_save_path();
$_SESSION['edad'] = 25;
$_SESSION["marvel"] = [
    "dia" => "periodista",
    "noche" => "superman",
    "temporadas" => [
        "t1" => "LLegada a la tierra",
        "t2" => "Estudios universitarios"
    ],
    "favorita" => "s"
];
?>
<a href="verSesiones.php">Ir a ver las variables de sesión</a>