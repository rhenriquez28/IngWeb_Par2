<?php require_once("Transaccion.php")
$pTran = new Transacion();
$pTran-> setMontoCapt($_POST["capital"]); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Monto Capital: <?php echo $pTran-> getMontoCapt(); ?>
    <ul>
      <li><a href="deposit.php">Deposito</a></li>
      <li><a href="retire.php">Retiro</a></li>
      <li><a href="transferencia.php">Transferencia</a></li>
      <li><a href="report.php">Reporte</a></li>
    </ul>
  </body>
</html>
