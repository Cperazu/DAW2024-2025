<?php

$temp = $_GET['temp'];
$mes = $_GET['mes'];
$arr = $_GET['arr'];

if (!isset($temp)) {
    $mes = 0;
    $arr = '';
}

if($mes == 12){
    $arr = $arr . ' ' . $temp;
    $arr = substr($arr, '2');
    
    $arr = explode(' ', $arr);

    $i=0;
    foreach ($arr as $a) {
        
        echo 'mes ', $i + 1, ': ';

        for ($o=0; $o < $a; $o++) { 
            echo '/';
        }
        echo '<br>';
        $i++;
    }
}

if ($mes < 12) {

?>
    <form action="#" method="get">
        <input type="number" name="temp" autofocus>
        <input type="hidden" name="mes" value="<?= ++$mes ?>">
        <input type="hidden" name="arr" value="<?= $arr . ' ' . $temp ?>">
        <input type="submit" name="submit" value="OK">
    </form>
<?php
}

?>