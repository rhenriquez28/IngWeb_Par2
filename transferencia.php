<?php require 'Transaccion.php';
session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Transferencia</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
  </head>
  <body>
    <header>
      <div id="logo">
          <img src="img/header3.png">
      </div>
    </header>
    <body>
      <ul>
        <li><a href="menu.php">Inicio</a></li>
        <li><a href="deposit.php">Deposito</a></li>
        <li><a href="retire.php">Retiro</a></li>
        <li><a class="active" href="transferencia.php">Transferencia</a></li>
        <li><a href="report.php">Reporte</a></li>
        <li><form class="" action="Tran_process.php" method="post">
          <input type="hidden" name="tran" value="4">
          <br>
          <button type="submit" name="button">Cerrar sesion</button>
        </form></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:auto;">
    <?php
    $pTransf = $_SESSION["montoCapt"];
    if ($pTransf-> getContTransf() < 3 && $pTransf-> getMontoCapt() > 100) {
      echo '<form class="" action="Tran_process.php" method="post">';
      echo '<input type="hidden" name="tran" value="3"><br><br>';
      echo '<label for="">Cuanto desea transferir?</label><br>';
      echo '<input type="text" name="monto" value="" required><br><br>';
      echo '<label for="">Inserte la cuenta a la que desea transferir:</label><br>';
      echo '<input type="text" name="" value="" required><br><br>';
      echo '<button type="submit" name="button">Transferir</button>';
      echo '</form>';
    }elseif ($pTransf-> getContTransf() >= 3) {
      echo 'Solo se pueden hacer hasta 3 transferencias por dia. Porfavor <a href="menu.php">vuelva al menu</a>';
    }elseif ($pTransf-> getMontoCapt() <= 100) {
      echo 'La cuenta no puede quedar con fondos debajo de los $100. Porfavor <a href="menu.php">vuelva al menu.</a>';
    }
    ?>
  </div>
  </body>
</html>
