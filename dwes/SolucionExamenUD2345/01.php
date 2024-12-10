<?php
if (!isset($_POST['n'])) {
?>
  Este programa muestra los n primeros números de la serie de Fibonacci.<br>
  Por favor, introduzca n:<br>
  <form action="pagina.php?ejercicio=01" method="post">
    <input type="number" name="n" autofocus>
    <input type="submit" value="Aceptar">
  </form>
<?php
} else {
  $n = $_POST['n'];
  $i = 1;
  $f1 = 0;
  $f2 = 1;

  switch ($n) {
    case 1:
      echo "0";
      break;
    case 2:
      echo "0 1";
      break;
    default:
      echo "0 1";
      while ($n > 2) {
        $aux = $f1;
        $f1 = $f2;
        $f2 = $aux + $f2;
        echo " $f2";
        $n--;
      }
  }
}
?>