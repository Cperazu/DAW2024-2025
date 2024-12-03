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
        <table>
          <?php
            $n = $_POST['n'];
            
            echo "Tabla del $n<br><br>";
            for ($i = 0; $i < 11; $i++) {
              echo "<tr><td>$n x $i = ".$n*$i."</tr></td>";
            }
          ?>
        </table>
        <br><br>
        <a href="index.php">>> Volver</a>
      </div>
        
      <div id="footer">
        © Tu Nombre y Apellidos
      </div>
    </div>
  </body>
</html>
