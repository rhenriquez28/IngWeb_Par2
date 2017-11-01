<?php require 'Transaccion.php';
session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Transferencia</title>
  </head>
  <body>
    <?php
    $pTransf = $_SESSION["montoCapt"];
    if ($pTransf-> getContTransf() < 3 && $pTransf-> getMontoCapt() > 100) {
      echo '<form class="" action="Tran_process.php" method="post">';
      echo '<input type="hidden" name="tran" value="3"><br>';
      echo '<label for="">Cuanto desea transferir?</label><br>';
      echo '<input type="number" name="monto" value="" required><br>';
      echo '<label for="">Inserte la cuenta a la que desea transferir:</label><br>';
      echo '<input type="text" name="" value="" required><br>';
      echo '<button type="submit" name="button">Transferir</button>';
      echo '</form>';
    }elseif ($pTransf-> getContTransf() >= 3) {
      echo 'Solo se pueden hacer hasta 3 transferencias por dia. Porfavor <a href="menu.php">vuelva al menu</a>';
    }elseif ($pTransf-> getMontoCapt() <= 100) {
      echo 'La cuenta no puede quedar con fondos debajo de los $100. Porfavor <a href="menu.php">vuelva al menu.</a>';
    }
    ?>
  </body>
</html>
