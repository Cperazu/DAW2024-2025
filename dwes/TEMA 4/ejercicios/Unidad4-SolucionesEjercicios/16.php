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
        if (!isset($_POST['n'])){
        ?>
        Por favor, introduzca un número entero:
        <form action="16.php" method="post">
          <input type="number" name="n" min="0" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
          $n = $_POST['n'];
          $volteado = 0;

          $numero = $n;
          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
          } // while

          echo "Si le damos la vuelta al $n tenemos el $volteado";
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
