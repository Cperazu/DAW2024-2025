<?php

for ($i = 0; $i < 20; $i++) {
  $numero[] = rand(0, 100);
}

foreach ($numero as $elemento) {
  $cuadrado[] = cuadrado($elemento);
  $cubo[] = cubo($elemento);
}

function cuadrado ($in) {
  return $in * $in;
}

function cubo ($in) {
  return $in * $in * $in;
}

?>
<table>
  <tr>
    <td>Número</td>
    <td>Cuadrado</td>
    <td>Cubo</td>
  </tr>
  <?php
  for ($i = 0; $i < 20; $i++) {
    echo "<tr><td>" . $numero[$i] . "</td>";
    echo "<td>" . $cuadrado[$i] . "</td>";
    echo "<td>" . $cubo[$i] . "</td></tr>";
  }
  ?>
</table>