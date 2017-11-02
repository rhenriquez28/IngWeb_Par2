<?php require 'Transaccion.php';
session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Retiro</title>
  </head>
  <body>
    <header>
      <div id="logo">
          <img src="img/header3.png">
      </div>
      <link rel="stylesheet" type="text/css" href="css/menu.css">
    </header>
    <body>
      <ul>
        <li><a href="menu.php">Inicio</a></li>
        <li><a href="deposit.php">Deposito</a></li>
        <li><a class="active" href="retire.php">Retiro</a></li>
        <li><a href="transferencia.php">Transferencia</a></li>
        <li><a href="report.php">Reporte</a></li>
        <li><form class="" action="Tran_process.php" method="post">
          <input type="hidden" name="tran" value="4">
          <br>
          <button type="submit" name="button">Cerrar sesion</button>
        </form></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:auto;">
    <?php
    $pRet = $_SESSION["montoCapt"];
    if ($pRet-> getContRet() < 4 && $pRet-> getAmountRet() < 1500 && $pRet-> getMontoCapt() > 100) {
      echo '<form class="" action="Tran_process.php" method="post">';
      echo '<input type="hidden" name="tran" value="2"><br>';
      echo '<label for="">Cuanto desea retirar?</label><br>';
      echo '<input type="texto" name="monto" value="" required><br><br>';
      echo '<button type="submit" name="button">Retirar</button>';
      echo '</form>';
    }elseif ($pRet-> getContRet() >= 4) {
      echo '<br><h1>Solo se pueden hacer hasta 4 retiros por dia.</h1> <br><br>Porfavor <a href="menu.php">vuelva al Inicio.</a>';
    }elseif ($pRet-> getAmountRet() >= 1500) {
      echo '<br><h1>Solo se puede retirar $1500 por dia.</h1> <br><br>Porfavor <a href="menu.php">vuelva al Inicio.</a>';
    }elseif ($pRet-> getMontoCapt() <= 100) {
      echo '<br><h1>La cuenta no puede quedar con fondos debajo de los $100.</h1> <br><br>Porfavor <a href="menu.php">Vuelva al Inicio.</a>';
    }
    ?>
  </div>
  </body>
</html>
