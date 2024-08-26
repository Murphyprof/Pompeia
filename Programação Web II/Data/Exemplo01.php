<?php 
date_default_timezone_set('America/Sao_Paulo');

$date = new DateTime();
echo $date->format('U = Y-m-d H:i:s') . "<br>";
$date->setTimestamp(1171502725);
echo $date->format('U = Y-m-d H:i:s') . "\n";

?>