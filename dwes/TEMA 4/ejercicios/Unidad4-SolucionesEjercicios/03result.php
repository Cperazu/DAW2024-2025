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
          $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3;
          echo "La nota media es ";
          echo round($media, $precision = 2);
          echo ", en el boletín tiene un ";
          
          if ($media < 5) {
            echo "Insuficiente.";
          }
          
          if (($media >= 5) && ($media < 6)) {
            echo  "Suficiente.";
          }
          
          if (($media >= 6) && ($media < 7)) {
            echo  "Bien.";
          }
          
          if (($media >= 7) && ($media < 9)) {
            echo  "Notable.";
          }
          
          if ($media >= 9) {
            echo  "Sobresaliente.";
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
