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
        echo "<p>Presione el link de abajo para continuar a su cuenta</p><br>";
        echo '<a href="index.php">Continuar</a>;'
      }
    }else {
    }
     ?>
  </body>
</html>
