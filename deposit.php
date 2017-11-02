<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Deposito</title>
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
        <li><a class="active" href="deposit.php">Deposito</a></li>
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
    <form class="" action="Tran_process.php" method="post">
      <label for="">Cuanto desea depositar?</label><br>
      <input type="hidden" name="tran" value="1">
      <input type="number" name="monto" value="" required><br>
      <br>
      <button type="submit" name="button">Depositar</button>
    </form>
  </div>
  </body>
</html>
