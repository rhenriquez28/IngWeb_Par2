<?php require 'Transaccion.php';
session_start();
$pTran= $_SESSION["montoCapt"];
switch ($_POST["tran"]) {
  case '0':
  $pTran-> setMontoCapt($_POST["capital"]);
  $_SESSION["montoCapt"]=$pTran;
  header("Location: menu.php");
    break;
  case '1':
  $pTran-> Deposito($_POST["monto"]);
  $_SESSION["Dep"] = $pTran;
  $_SESSION["montoCapt"]=$pTran;
  header("Location: menu.php");
    break;

  case '2':
  $pTran-> Retiro($_POST["monto"]);
  $_SESSION["Ret"] = $pTran;
  $_SESSION["montoCapt"]=$pTran;
  header("Location: menu.php");
    break;

  case '3':
  $pTran-> Transferencia($_POST["monto"]);
  $_SESSION["Transf"] = $pTran;
  $_SESSION["montoCapt"]=$pTran;
  header("Location: menu.php");
    break;

  case '4':
    session_destroy();
    header("Location: login.php");
    break;
}
 ?>
