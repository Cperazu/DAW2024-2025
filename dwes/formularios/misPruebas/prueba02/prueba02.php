<?php

require './comunPrueba02.php';

if (file_exists(FICHERO)) {
    $libros = json_decode(file_get_contents(FICHERO), true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://vps456458.ovh.net/dwes/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>prueba02</title>
</head>

<body>
    <div>
        <h2>Regristrar libros:</h2>
        <form method="post" action="./procesarPueba02.php">
            <label style="display: block;" for="titulo">Título</label>
            <input style="display: block;" type="text" name="titulo">

            <label style="display: block;" for="autor">Autor/a(s)</label>
            <input style="display: block;" type="text" name="autor">

            <button type="submit">Registrar</button>
        </form>
    </div>
    <div>
        <h2>Libros registrados:</h2>
        <?php
        foreach ($libros  as $libro) {
            echo "<p>" . $libro['titulo'] . "</p>";
            echo "<p>" . $libro['autor'] . "</p>";
        }
        ?>
    </div>
</body>

</html>