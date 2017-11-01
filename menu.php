<?php require 'Transaccion.php';
session_start();
$pTran = $_SESSION["montoCapt"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Menu</title>
  </head>
  <body>
    Monto Capital: $<?php echo $pTran-> getMontoCapt(); ?>
    <ul>
      <li><a href="deposit.php">Deposito</a></li>
      <li><a href="retire.php">Retiro</a></li>
      <li><a href="transferencia.php">Transferencia</a></li>
      <li><a href="report.php">Reporte</a></li>
      <li><form class="" action="Tran_process.php" method="post">
        <input type="hidden" name="tran" value="4">
        <button type="submit" name="button">Cerrar sesion</button>
      </form></li>
    </ul>
  </body>
</html>
