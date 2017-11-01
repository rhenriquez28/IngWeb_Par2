<?php require 'Transaccion.php';
session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Retiro</title>
  </head>
  <body>
    <?php
    $pRet = $_SESSION["montoCapt"];
    if ($pRet-> getContRet() < 4 && $pRet-> getAmountRet() < 1500 && $pRet-> getMontoCapt() > 100) {
      echo '<form class="" action="Tran_process.php" method="post">';
      echo '<input type="hidden" name="tran" value="2"><br>';
      echo '<label for="">Cuanto desea retirar?</label><br>';
      echo '<input type="number" name="monto" value="" required><br>';
      echo '<button type="submit" name="button">Retirar</button>';
      echo '</form>';
    }elseif ($pRet-> getContRet() >= 4) {
      echo 'Solo se pueden hacer hasta 4 retiros por dia. Porfavor <a href="menu.php">vuelva al menu.</a>';
    }elseif ($pRet-> getAmountRet() >= 1500) {
      echo 'Solo se puede retirar $1500 por dia. Porfavor <a href="menu.php">vuelva al menu.</a>';
    }elseif ($pRet-> getMontoCapt() <= 100) {
      echo 'La cuenta no puede quedar con fondos debajo de los $100. Porfavor <a href="menu.php">vuelva al menu.</a>';
    }
    ?>
  </body>
</html>
