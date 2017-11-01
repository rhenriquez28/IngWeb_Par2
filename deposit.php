<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Deposito</title>
  </head>
  <body>
    <form class="" action="Tran_process.php" method="post">
      <label for="">Cuanto desea depositar?</label><br>
      <input type="hidden" name="tran" value="1">
      <input type="number" name="monto" value="" required><br>
      <button type="submit" name="button">Depositar</button>
    </form>
  </body>
</html>
