<?php require 'Transaccion.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Reporte</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/report.css">
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
        <li><a href="transferencia.php">Transferencia</a></li>
        <li><a class="active" href="report.php">Reporte</a></li>
        <li><form class="" action="Tran_process.php" method="post">
          <input type="hidden" name="tran" value="4">
          <br>
          <button type="submit" name="button">Cerrar sesion</button>
        </form></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:auto;">
    <p>Cliente: Roy Henriquez</p>
    <p>Numero de Cuenta: 01-345-2124-2233</p>
    <br>
    <table id="customers">
      <thead>
        <th>Nº</th>
        <th>Tipo de Transaccion</th>
        <th>Monto</th>
        <th>Saldo Capital</th>
      </thead>
      <?php
        $pReport = $_SESSION["montoCapt"];
        $Reporte = $pReport-> getReporte();
        for ($i=0; $i < sizeof($Reporte); $i++) {
          echo "<tr>";
          echo "<td>".($i+1)."</td>";
          echo "<td>".$Reporte[$i][0]."</td>";
          echo "<td>$".number_format($Reporte[$i][1], 2)."</td>";
          echo "<td>$".number_format($Reporte[$i][2], 2)."</td>";
          echo "</tr>";
        }
        ?>
    </table>
    <br>
    <br>
    <table id="customers">
      <thead>
        <th>Total de Credito (Depósitos)</th>
        <th>Total de Debito (Retiros)</th>
        <th>Total de Transferencias</th>
        <th>Total de Intereses ganados</th>
        <th>Saldo Capital</th>
      </thead>
      <tr>
        <td><?php echo "$".number_format($pReport-> getAmountDep(), 2); ?></td>
        <td><?php echo "$".number_format($pReport-> getAmountRet(), 2); ?></td>
        <td><?php echo "$".number_format($pReport-> getAmountTransf(), 2); ?></td>
        <td><?php echo "$".number_format($pReport-> getAmountInt(), 2); ?></td>
        <td><?php echo "$".number_format($pReport-> getMontoCapt(), 2); ?></td>
      </tr>
    </table>
  </div>
  </body>
</html>
