<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link href="default.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <div id="header">
      <h1>
        UNIDAD 4
      </h1>
      <h2>
        CONDICIONALES Y BUCLES EN PHP
      </h2>
      <h2>
        <br>Solución de relación de ejercicios
      </h2>
    </div>

    <div id="content">
      Este programa calcula la media de los números positivos introducidos.<br>
      Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
      <?php
      if (isset($_POST['total'])) {
        $total = $_POST['total'];
      } else {
        $total = 0;
      }
      if (isset($_POST['cuentaNumeros'])) {
        $cuentaNumeros = $_POST['cuentaNumeros'];
      } else {
        $cuentaNumeros = 0;
      }
      if (isset($_POST['n'])) {
        $n = $_POST['n'];
      } else {
        $n = 0;
      }

      if ($n >= 0) {
        $total += $n;
        $cuentaNumeros++;
      ?>
        <form action="10.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="hidden" name="total" value="<?php echo $total; ?>">
          <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
          <input type="submit" value="Aceptar">
        </form>
      <?php
      } else {
      ?>
        <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros - 1); ?>
        <br><br>
        <a href="index.php">>> Volver</a>
      <?php
      }
      ?>

    </div>
    <div id="footer">
      © Tu Nombre y Apellidos
    </div>
  </div>
</body>

</html>