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
        UNIDAD 5
      </h1>
      <h2>
        ARRAYS Y FUNCIONES EN PHP
      </h2>
      <h2>
        <br>Solución de relación de ejercicios
      </h2>
    </div>

    <div id="content">

      <?php
      include $_GET['ejercicio'] . '.php';
      ?>

      <br><br>
      <a href="index.php">>> Volver</a>
    </div>
    <div id="footer">
      © © Tu Nombre y Apellido
    </div>
  </div>
</body>

</html>