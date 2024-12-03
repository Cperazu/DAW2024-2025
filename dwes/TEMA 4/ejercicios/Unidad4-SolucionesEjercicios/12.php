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
          if (!isset($_POST['base']) || !isset($_POST['exponente'])) {
          ?>  
            Este programa calcula la potencia a partir de la base y el exponente.<br>
            <form action="12.php" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponente"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];
            $potencia = 1;

            if ($exponente == 0) {
              $potencia = 1;
            }

            if ($exponente > 0) {
              for ($i = 0; $i < $exponente; $i++) {
                $potencia *= $base;
              }
            }

            echo "$base<sup>$exponente</sup> = $potencia";
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
