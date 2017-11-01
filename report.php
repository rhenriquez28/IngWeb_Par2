<?php require 'Transaccion.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Reporte</title>
  </head>
  <body>
    <p>Cliente: Roy Henriquez</p>
    <p>Numero de Cuenta: 01-345-2124-2233</p>
    <br>
    <table>
      <thead>
        <th>Nº</th>
        <th>Tipo de Transaccion</th>
        <th>Monto</th>
        <th>Saldo Capital</th>
      </thead>
      <?php
        $pReport = $_SESSION["montoCapt"];
        $i=0;
        foreach ($pReport-> getReporte() as $key) {
          echo "<tr>";
          echo "<td>";
          echo ($i+1);
          echo "</td>";
          echo "<td>";
          echo $key[0];
          echo "</td>";
          echo "<td>";
          echo "$".$key[1];
          echo "</td>";
          echo "<td>";
          echo "$".$key[2];
          echo "</td>";
          echo "</tr>";
          $i++;
        }
        ?>
    </table>
    <br>
    <br>
    <table>
      <thead>
        <th>Total de Credito (Depósitos)</th>
        <th>Total de Debito (Retiros)</th>
        <th>Total de Transferencias</th>
        <th>Total de Intereses ganados</th>
        <th>Saldo Capital</th>
      </thead>
      <tr>
        <td><?php echo "$".$pReport-> getAmountDep(); ?></td>
        <td><?php echo "$".$pReport-> getAmountRet(); ?></td>
        <td><?php echo "$".$pReport-> getAmountTransf(); ?></td>
        <td><?php echo "$".$pReport-> getAmountInt(); ?></td>
        <td><?php echo "$".$pReport-> getMontoCapt(); ?></td>
      </tr>
    </table>
  </body>
</html>
