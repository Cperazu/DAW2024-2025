<?php

const FICHERO = '/datos/agenda.json';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
</head>
<body>
<div style="float: left; width: 50%;">
    <h2>Introduce tus datos:</h2>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="edad">Edad:</label>
        <input type="numbre" name="edad" id="edad" required><br><br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" id="masculino" required>
        <label for="masculino">Masculino</label>
        <input type="radio" name="sexo" value="Femenino" id="femenino" required>
        <label for="femenino">Femenino</label><br><br>
        <label for="observacion">Observación:</label><br>
        <textarea name="observacion" id="observacion" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</div>
<div style="float: right; width: 50%;">
    <h2>Lista de amigos:</h2>
    <?php
    $data = [];
    if (file_exists(FICHERO)) {
        $data = file_get_contents(FICHERO);
    }
    if (isset($_POST["submit"])) {
        $currentDateTime = new DateTime('now');
        $nuevoDato = [
            "nombre" => $_POST["nombre"],
            "edad" => $_POST["edad"],
            "sexo" => $_POST["sexo"],
            "observacion" => $_POST["observacion"],
            "fecha" => $currentDateTime->format('Y-m-d H:i:s')
        ];
        $data[] = $nuevoDato;
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents(FICHERO, $jsonData);
    }
    print_r($data);
    ?>
</div>
</body>
</html>

