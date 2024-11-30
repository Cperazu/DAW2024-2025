<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej_09.php</title>
</head>

<body>
    <?php


    $asteriscos = 5;
    $espacios = 1;
    /* pintar espacios en blanco del principio*/
    for ($i = 4; $i >= 0; $i--) {

        for ($a = $asteriscos; $a > 0; $a--) {
            echo '*';
        }

        for ($b = $espacios; $b > 0; $b--) {
            echo '&nbsp';
        }

        for ($c = $asteriscos; $c > 0; $c--) {
            echo '*';
        }
        echo '<br>';

        $espacios+=2;
        $asteriscos--;
    }

    ?>

</body>

</html>