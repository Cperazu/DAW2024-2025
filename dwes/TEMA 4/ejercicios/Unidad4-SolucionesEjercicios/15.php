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
          if (!isset($_POST['alturaIntroducida']) || !isset($_POST['figura'])){
          ?>
          <h2>Pirámide</h2>
          <form action="15.php" method="post">
            Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""><br>
            Figura base:
            <select name="figura">
                <option value="bolita">Bolita</option>
                <option value="ladrillo">Ladrillo</option>
                <option value="pinguino">Pingüino</option>
                <option value="pina">Piña</option>
                <option value="sol">Sol</option>
  
            </select>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else { // pinta la pirámide //////////////////////////////
            $alturaIntroducida = $_POST['alturaIntroducida'];
            $figura = $_POST['figura'];
            $altura = 1;
            $espacios = $alturaIntroducida - 1;

            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "<img src=\"blanco.png\" width=\"36\">";
              }

              // pinta la línea
              for ($i = 1; $i < $altura*2; $i++) {
                echo "<img src=\"$figura.png\" width=\"36\">";
              }

              echo "<br>";
              
              $altura++;
              $espacios--;
            }          
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
