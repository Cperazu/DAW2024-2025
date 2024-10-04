<?php
//Gestión para .....
$usuarioTipo = 'user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    if ($usuarioTipo == 'admin') {
        ?>
        <link href="asdaasd">
    <?php } else { ?>
        <link href="qeqweqweqw">
    <?php } ?>
</head>
<body>
<?php
echo "Esto es para que Javier lo vea!";
?>
<table style="border: solid 2px">
    <tr>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <td>A</td>
            <td>B</td>
        <?php } ?>
    </tr>
</table>
<table style="border: solid 2px">
    <tr>
        <?php for ($i = 1; $i <= 10; $i++) {
            echo "<td>A</td>";
            echo "<td>B</td>";
        } ?>
    </tr>
</table>
</body>
</html>
