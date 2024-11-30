<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej_09.php</title>
</head>

<body>
    <?php


    $espacios = 5;
    $asteriscos = 1;
    /* pintar espacios en blanco del principio*/
    for ($i = 4; $i >= 0; $i--) {

        for ($a = $espacios; $a > 0; $a--) {
            echo '_';
        }

        for ($b = $asteriscos; $b > 0; $b--) {
            echo '*';
        }

        for ($c = $espacios; $c > 0; $c--) {
            echo '_';
        }
        echo '<br>';

        $espacios--;
        $asteriscos += 2;
    }

    ?>

</body>

</html>