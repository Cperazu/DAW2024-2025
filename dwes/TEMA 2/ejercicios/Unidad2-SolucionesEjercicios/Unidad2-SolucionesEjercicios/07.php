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
        $nombre = "Tu Nombre y Apellidos";
        $direccion = "C/ Larios, 888 - Ático D";
        $telefono = "951 123456"; 

        echo $nombre, "<br>";
        echo $direccion, "<br>";
        echo $telefono, "<br>";
      ?>
      </div>
      <div id="footer">
        © Tu Nombre y Apellidos
      </div>
    </div>
  </body>
</html>
