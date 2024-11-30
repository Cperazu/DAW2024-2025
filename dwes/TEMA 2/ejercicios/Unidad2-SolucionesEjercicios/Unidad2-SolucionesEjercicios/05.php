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
          UNIDAD 2
        </h1>
        <h2>
          INTRODUCCION A PHP
        </h2>
        <h2>
          <br>Solución de relación de ejercicios
        </h2>
      </div>

      <div id="content">
        <?php
          $x = 144;
          $y = 999;

          echo "x = ", $x;
          echo "<br>y = ", $y;
          echo "<br>x + y = ", $x + $y;
          echo "<br>x - y = ", $x - $y;
          echo "<br>x / y = ", $x / $y;
          echo "<br>x * y = ", $x * $y;
        ?>
      </div>
      <div id="footer">
        © Tu Nombre y Apellidos
      </div>
    </div>
  </body>
</html>
