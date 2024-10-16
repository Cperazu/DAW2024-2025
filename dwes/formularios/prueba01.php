<?php
const FICHERO = "/datosPrueba01.json";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="divForm" style="float: left; width: 50%;">
        <form method="post" action="">
            <label style="display: block; margin: 3px;" for="codUsuario">Código usuario</label>
            <input style="display: block; margin: 3px;" type="text" name="codUsuario">

            <label style="display: block; margin: 3px;" for="nombre">nombre</label>
            <input style="display: block; margin: 3px;" type="text" name="nombre">

            <label style="display: block; margin: 3px;" for="apellido1">primer apellido</label>
            <input style="display: block; margin: 3px;" type="text" name="apellido1">

            <label style="display: block; margin: 3px;" for="apellido2">segundo apellido</label>
            <input style="display: block; margin: 3px;" type="text" name="apellido2">


            <button style="display: block; margin: 3px;" type="submit" name="submit">Enviar</button>
        </form>
    </div>

    <div id=divResult style="float: right; width: 50%;">
        <h2>checking de usuarios :</h2>
        <?php
        $datos = [];
        if (file_exists(FICHERO)) {
            $datos = file_get_contents(FICHERO);
        }
        if (isset($_POST["submit"])) {
            $nuevosDatos = [
                $_POST["codUsuario"] => [
                    "nombre" => $_POST["nombre"],
                    "apellido1" => $_POST["apellido1"],
                    "apellido2" => $_POST["apellido2"],
                    "personajes" => [
                        "p1" => "p1",
                        "p2" => "p2",
                        "p3" => "p3"
                    ]
                ]
            ];
            $datos = $nuevosDatos;
            $nuevosDatosJSON = json_encode($datos, JSON_PRETTY_PRINT);
            file_put_contents(FICHERO, $nuevosDatosJSON);
        }
        echo "<pre>";
        print_r($datos);
        echo "</pre>";
        ?>
    </div>
</body>

</html>