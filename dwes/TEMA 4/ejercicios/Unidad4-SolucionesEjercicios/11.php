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
          Por favor, introduzca un número entero:<br>
          <form action="11.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
          </form>
        <?php
        } else {
          $n = $_POST['n'];
          echo "<table><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
          for ($i = $n; $i < $n + 5; $i++) {
            echo "<tr><td>$i</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
          }
          echo "</table>";
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
