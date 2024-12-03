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
        <?php

          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          // ordenación de los dos primeros números
          if ($a > $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          // ordenación de los dos últimos números
          if ($b > $c) {
            $aux = $b;
            $b = $c;
            $c = $aux;
          }

          // se vuelven a ordenar los dos primeros
          if ($a > $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          echo "Los números introducidos ordenados de menor a mayor son $a, $b y $c."; 

        ?>
        <br><br>
        <a href="index.php">>> Volver</a>       
      </div>
      
      <div id="footer">
        © Tu Nombre y Apellidos
      </div>
      
    </div>
  </body>
</html>
