<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $n = $_GET['n'];
    $texto = $_GET['texto'];
    $pos = $_GET['pos'];

    if (!isset($n)) {
        $pos = 0;
        $texto = "";
    }

    if ($pos == 15) {
        $texto = $texto . " " . $n; // añade el último número leído
        $texto = substr($texto, 2); // quita los dos primeros
        // espacios de la cadena
        $n = explode(" ", $texto);
        echo "Los números introducidos son: ";
        foreach ($n as $o) {
            echo $o, " ";
        }

        echo '<br>', 'Aqué el desplazado : ';
        $aux = $n[0];
        for ($i=0; $i < 15; $i++) { 
            $n[$i]= $n[$i+1];
            echo $n[$i], ' ';
        }
        $n[14]=$aux;
        echo$n[14];
    }

    if (($pos < 15) || (!isset($n))) {
    ?>

        <form action="#" method="get">
            <input type="number" name="n" autofocus>
            <input type="hidden" name="texto" value="<?php echo $texto . " " . $n; ?>">
            <input type="hidden" name="pos" value="<?php echo ++$pos; ?>">
            <input type="submit" name="submit" value="OK">
        </form>
    <?php
    }
    ?>
</body>

</html>