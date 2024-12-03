<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej_10</title>
</head>

<body>

    <?php
    if (isset($_POST['total'])) {
        $total = $_POST['total'];
    } else {
        $total = 0;
    }
    if (isset($_POST['intentos'])) {
        $intentos = $_POST['intentos'];
    } else {
        $intentos = 0;
    }
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
    } else {
        $n = 0;
    }

    if ($n >= 0) {
        $total += $n;
        $intentos++;

    ?>
        <form action="index.php" method="post">
            <input type="number" name="n">
            <input type="hidden" name="total" value=" <?php echo $total; ?> ">
            <input type="hidden" name="intentos" value=" <?php echo $intentos; ?> ">
            <input type="submit" name="Continuar">
        </form>
    <?php
    } else {
    ?>
        <br><br>La media de los números introducidos es <?php echo $total / ($intentos - 1); ?>
        <br><br>
        <a href="index.php">>> Volver</a>
    <?php
    }
    ?>
</body>

</html>