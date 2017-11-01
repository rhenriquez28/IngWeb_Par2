<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST["username"]&& isset($_POST["password"]))) {
      if ($_POST["username"]=="root" && $_POST["password"]=="1234") {
        echo "<p>Bienvenido</p><br>";
        echo "<p>Seleccione cual va a ser su monto capital inicial:</p><br>";
        echo '<form class="" action="login_check.php" method="post">';
        echo '<label for="">Monto Capital:</label>';
        echo '<input type="number" name="capital" value="100" min="100" required><br>';
        echo '<button type="submit" name="siguiente">Siguiente</button>';
        echo '</form>';
      }
    }else {
    }
     ?>
  </body>
</html>
