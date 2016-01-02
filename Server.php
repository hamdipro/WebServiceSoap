<?php
include "DataProvider/Calculator.php";
include "DataProvider/Strings.php";
// server
class MySoapServer
{
	function __construct()
  {
     $this->service1 = new Calculator();
     $this->service2 = new Strings();
  }
  public function subNumbers($num1,$num2)
  {
    return $this->service1->Sub($num1,$num2);
  }
   public function mulNumbers($num1,$num2)
  {
    return $this->service1->Mul($num1,$num2);
  }
  
  public function addNumbers($num1,$num2)
  {
    return $this->service1->Sum($num1,$num2);
  }
  public function divNumbers($num1,$num2)
  {
    return $this->service1->Div($num1,$num2);
  }
  public function StrLength($ch)
  {
    return $this->service2->getLength($ch);
  }
  
}

$options= array('uri'=>'http://localhost/webservice');
$server=new SoapServer(NULL,$options);
$server->setClass('Calculator');
$server->setClass('MySoapServer');
$server->handle();

?>