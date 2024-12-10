<?php session_start(); ?>
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
        EXAMEN
      </h1>
      <h2>
        UNIDAD 2, 3, 4, 5
      </h2>
    </div>

    <div id="content">

      <?php
      include $_REQUEST['ejercicio'] . '.php';
      ?>

      <br><br>
      <a href="index.php">>> Volver</a>
    </div>
    <div id="footer">
      © Tu Nombre y Apellido
    </div>
  </div>
</body>

</html>