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
          if (!isset($_POST['n'])) {
          ?>
            Introduzca un número para saber si es primo o no.<br>
            <form action=14.php method="post">
              <input type="number" name="n" min="0" autofocus><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            $esPrimo = true;
      
            for ($i = 2; $i < $n; $i++) {
              if ($n % $i == 0) {
                $esPrimo = false;
              }
            }
          
            // El 0 y el 1 no se consideran primos
            if (($n == 0) || ($n == 1)) {
              $esPrimo = false;
            }
            
            if ($esPrimo) {
                echo "El $n es primo.";
            } else {
                echo "El $n no es primo.";
            }
          }
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
