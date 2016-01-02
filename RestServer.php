<?php
include "DataProvider/Calculator.php";
include "DataProvider/Strings.php";
// server
class MyRestServer
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

if(isset($_GET['operation'])){
	$a = new MyRestServer();
	switch ($_GET['operation']) {
		case 'add':
			# code...
			$result = $a->addNumbers((int)$_GET['x'],(int)$_GET['y']);
			break;
			case 'sub':
			# code...
			$result = $a->subNumbers((int)$_GET['x'],(int)$_GET['y']);
			break;
		
		default:
			$result = "undefied operation";
			break;
	}
}else{
				$result = "undefied operation";

}
if($_GET['format']=="XML"){

header('Content-type: text/xml');

$doc = new DOMDocument();
$root = $doc->createElement('result',null);
$doc->appendChild($root);
$val = $doc->createElement('value',$result);
$root->appendChild($val);
echo $doc->saveXML();
}else{
	header('Content-type: text/json');

	$arr = array('result'=>array('value'=>$result));
	echo json_encode($arr);
}



?>