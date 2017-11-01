<?php
class Transaccion
{
  private $contGen = 0;
  private $contRet = 0;
  private $contTransf = 0;
  private $montoCapt = 0;
  private $captInicial = 0;
  private $amountDep = 0;
  private $contDep = 0;
  private $amountTransf = 0;
  private $amountRet = 0;
  private $amountInt = 0;
  public $Reporte = array();


  public function Deposito($amount)
  {
    $this->montoCapt = $this->montoCapt + $amount + ($amount * 0.0125);
    $this->amountDep = $this->amountDep + $amount;
    $this->amountInt = $this->amountInt + ($amount * 0.0125);
    $this->contDep++;
    $this->Reporte[]=array("Deposito", $this->amountDep, $this->montoCapt);
  }

  public function Retiro($amount)
  {
    $this->montoCapt = $this->montoCapt - $amount;
    $this->amountRet = $this->amountRet + $amount;
    $this->contRet++;
    $this->Reporte[]=array("Retiro", $this->amountRet, $this->montoCapt);
  }

  public function Transferencia($amount)
  {
    $this->montoCapt = $this->montoCapt - $amount;
    $this->amountTransf = $this->amountTransf + $amount;
    $this->contTransf++;
    $this->Reporte[]=array("Transferencia", $this->amountTransf, $this->montoCapt);
  }

  /*public function Reporte()
  {
    # code...
  }*/

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

public function getReporte(){
		return $this->Reporte;
	}

	public function setReporte($Reporte){
		$this->Reporte = $Reporte;
	}

  public function getContDep(){
  return $this->contDep;
}

public function setContDep($contDep){
  $this->contDep = $contDep;
}

public function getCaptInicial(){
  return $this->captInicial;
}

public function setCaptInicial($captInicial){
  $this->captInicial = $captInicial;
}
}

?>
