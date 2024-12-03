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
        Este programa le dirá cuál es su horóscopo a partir de su fecha de nacimiento.<br>
        <form action="04result.php" method="post">
          Introduzca el número del mes en que nació (1-12):<br>
          <input type="number" min="1" max="12" name="mes" autofocus><br>
          Introduzca el día:<br>
          <input type="number" min="1" max="31" name="dia"><br>
          <input type="submit" value="Aceptar">
        </form>
      </div>
      
      <div id="footer">
        © Tu Nombre y Apellidos
      </div>
      
    </div>
  </body>
</html>
