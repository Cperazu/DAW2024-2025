<?php

$euros = $_POST['eur'];
$conversion = 1.06;
$dolares = $euros * $conversion;


echo $euros, ' euros = ', $dolares, ' dólares' ;