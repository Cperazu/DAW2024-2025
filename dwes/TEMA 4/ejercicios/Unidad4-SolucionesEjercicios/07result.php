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
          $n = $_POST['n'];
          
          if (($n % 2) == 0) {
            echo "El número introducido es par";
          } else {
            echo "El número introducido es impar";
          }

          if (($n % 5) == 0) {
            echo " y divisible entre 5.";
          } else {
            echo " y no es divisible entre 5.";
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
