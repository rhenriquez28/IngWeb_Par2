<?php require 'Transaccion.php';
session_start();
$pTran = $_SESSION["montoCapt"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Menu</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
  </head>
  <header>
    <div id="logo">
        <img src="img/header3.png">
    </div>
  </header>
  <body>
    <ul>
      <li><a class="active" href="menu.php">Inicio</a></li>
      <li><a href="deposit.php">Deposito</a></li>
      <li><a href="retire.php">Retiro</a></li>
      <li><a href="transferencia.php">Transferencia</a></li>
      <li><a href="report.php">Reporte</a></li>
      <li><form class="" action="Tran_process.php" method="post">
        <input type="hidden" name="tran" value="4">
        <br>
        <button type="submit" name="button">Cerrar sesion</button>
      </form></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:auto;">
    <br>
    <p>Cliente: Roy Henriquez</p>
    <p>Numero de Cuenta: 01-345-2124-2233</p>
    <br>
    Su Monto Capital: $<?php echo number_format($pTran-> getMontoCapt(), 2); ?>
  </div>
  </body>
</html>
