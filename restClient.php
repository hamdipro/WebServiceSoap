<?php

$restUrl = "http://localhost/webserviceRest/RestServer.php?operation=add&x=2&y=3";

$xml = simplexml_load_file($restUrl);
echo $xml->value;






?>