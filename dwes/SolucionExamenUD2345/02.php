<?php

// Se inicializan los valores en la primera carga de página
if (!isset($_POST['n'])) {
  $cuentaNumeros = 0;
  $sumaImpares = 0;
  $cuentaImpares = 0;
  $mayorPar = 0;
} else {
  $n = $_POST['n'];
  $cuentaNumeros = $_POST['cuentaNumeros'];
  $sumaImpares = $_POST['sumaImpares'];
  $cuentaImpares = $_POST['cuentaImpares'];
  $mayorPar = $_POST['mayorPar'];
  if ($n > 0) {
    $cuentaNumeros++;
    if ($n % 2 == 0) {
      if ($n > $mayorPar) {
        $mayorPar = $n;
      }
    } else {
      $cuentaImpares++;
      $sumaImpares += $n;
    }
  }
}

// Muestra el formulario en la primera carga de página y mientras se introduzcan números positivos
if ((!isset($n)) || ($n > 0)) {
?>
  Introduzca un número. Si quiere terminar, introduzca un número negativo.<br>
  <form action="pagina.php?ejercicio=02" method="post">
    <input type="number" name="n" autofocus=""><br>
    <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
    <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
    <input type="hidden" name="cuentaImpares" value="<?php echo $cuentaImpares; ?>">
    <input type="hidden" name="mayorPar" value="<?php echo $mayorPar; ?>">
    <input type="submit" value="Aceptar">
  </form>
<?php
}

// Muestra el resultado
if (isset($n) && $n < 0) {
  echo "Se han introducido $cuentaNumeros números <br>";
  if($cuentaImpares==0) {
    echo "No se han introducido números impares <br>";
  } else {
    echo "La media de los impares es " . ($sumaImpares / $cuentaImpares) . "<br>";
  }
  
  echo "El mayor de los pares es $mayorPar<br>";
}
?>