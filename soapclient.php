<?php


// client
$options= array(
  'location' 	=>	'http://localhost/webservice/Server.php',
  'uri'		=>	'http://localhost/webservice'
);
$client=new SoapClient(NULL,$options);
echo "Invocing AddNumbers(3,5) Method returns =  " .$client->addNumbers(3,5)."<br>"; 
echo "Invocing subNumbers(5,3) Method returns =  " .$client->subNumbers(5,3)."<br>"; 
echo "Invocing mulNumbers(5,3) Method returns =  " .$client->mulNumbers(5,3)."<br>"; 
echo "Invocing divNumbers(4,2) Method returns =  " .$client->divNumbers(4,2)."<br>";
echo "Invocing StrLength('Hamdi') Method returns =  " .$client->StrLength('Hamdi')."<br>";



?>