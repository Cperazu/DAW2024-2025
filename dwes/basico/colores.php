<?php
$colores = ["red", "green"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
<h5>Curso de daw</h5>
<?php
echo "<i>Hola Mundo</i>";
?>
<table class="table table-bordered">
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
            <td style="background-color:<?= $colores[$i % 2] ?>"><?php echo $i; ?></td>
            <td style="background-color:red"><?= $i ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>