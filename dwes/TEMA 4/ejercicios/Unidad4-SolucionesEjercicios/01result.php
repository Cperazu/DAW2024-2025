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
          $hora = $_POST['hora'];

          if (($hora >= 6) && ($hora <= 12)) {
            echo "Buenos días";
          }

          if (($hora >= 13) && ($hora <= 20)) {
            echo "Buenas tardes";
          }

          if ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
            echo "Buenas noches";
          }

          if (($hora >= 24) || ($hora < 0)) {
            echo "La hora introducida no es correcta.";
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
