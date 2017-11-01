<?php
class Transacion
{
  private $contRet = 0;
  private $contTransf = 0;
  private $montoCapt = 0;
  private $amountDep = 0;
  private $amountTransf = 0;
  private $amountRet = 0;
  private $amountInt = 0;
  private $Reporte = array('' => , );


  public function Deposito($amount){
    $montoCapt = $montoCapt + $amount + ($amount * 0.0125);
    $amountDep = $amountDep + $amount;
    $amountInt = $amountInt + ($amount * 0.0125);
  }

  public function Retiro($amount)
  {
    $montoCapt = $montoCapt - $amount;
    $amountRet = $amountRet + $amount;
    $contRet++;
  }

  public function Transferencia($amount)
  {
    $montoCapt = $montoCapt - $amount;
    $amountTransf = $amountTransf + $amount;
    $contTransf++;
  }

  public function getMontoCapt(){
    return $this->montoCapt;
  }

  public function setMontoCapt($montoCapt){
    $this->montoCapt = $montoCapt;
  }

  public function getContRet(){
  return $this->contRet;
}

public function setContRet($contRet){
  $this->contRet = $contRet;
}

public function getContTransf(){
  return $this->contTransf;
}

public function setContTransf($contTransf){
  $this->contTransf = $contTransf;
}

public function getAmountDep(){
  return $this->amountDep;
}

public function setAmountDep($amountDep){
  $this->amountDep = $amountDep;
}

public function getAmountTransf(){
  return $this->amountTransf;
}

public function setAmountTransf($amountTransf){
  $this->amountTransf = $amountTransf;
}

public function getAmountRet(){
  return $this->amountRet;
}

public function setAmountRet($amountRet){
  $this->amountRet = $amountRet;
}

public function getAmountInt(){
  return $this->amountInt;
}

public function setAmountInt($amountInt){
  $this->amountInt = $amountInt;
}
}

?>
