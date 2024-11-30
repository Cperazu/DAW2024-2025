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
          echo "<table>";
        ?>
        <tr><th>Spanish</th><th>English</th></tr>
        <tr><td>conocimiento</td><td>knowledge</td></tr>
        <tr><td>amor</td><td>love</td></tr>
        <tr><td>felicidad</td><td>happiness</td></tr>
        <tr><td>agua</td><td>water</td></tr>
        <tr><td>aire</td><td>air</td></tr>
        <tr><td>pastel</td><td>cake</td></tr>
        <tr><td>dinero</td><td>money</td></tr>
        <tr><td>libro</td><td>book</td></tr>
        <tr><td>bosque</td><td>forest</td></tr>  
        <?php
          echo "</table>";
        ?>
      </div>
      <div id="footer">
        © Tu Nombre y Apellidos
      </div>
    </div>
  </body>
</html>
