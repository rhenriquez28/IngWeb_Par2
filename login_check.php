<?php require 'Transaccion.php';
session_start();
$pTran = new Transaccion(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Monto Capital</title>
    <style>
    #logo img{
        margin: auto;
        z-index: 100;
        display: block;
        position: relative;
        max-width: 100%;
        max-height: 5%;
        height: auto;
        width: auto;
    }
    </style>
  </head>
  <header>
    <div id="logo">
        <img src="img/header2.png">
    </div>
  </header>
  <body>
    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      if ($_POST["username"]=="root" && $_POST["password"]=="1234") {
        echo "<p><h1>Bienvenido</h1></p><br>";
        echo "<p>Seleccione cual va a ser su monto capital inicial:</p><br>";
        echo '<form class="" action="Tran_process.php" method="post">';
        echo '<input type="hidden" name="tran" value="0"><br>';
        echo '<label for="">Monto Capital:</label>';
        echo '<input type="number" name="capital" value="100" min="100" required><br>';
        echo '<br><button type="submit" name="siguiente">Siguiente</button>';
        echo '</form>';
        $_SESSION["montoCapt"]=$pTran;
      }else {
        echo "Ha introducido un usuario o contraseña erronea. Porfavor intentelo denuevo<br>";
        echo '<form class="" action="Tran_process.php" method="post">';
        echo '<input type="hidden" name="tran" value="4">';
        echo '<button type="submit" name="button">Aceptar</button>';
        echo '</form>';
      }
    }
     ?>
  </body>
</html>
