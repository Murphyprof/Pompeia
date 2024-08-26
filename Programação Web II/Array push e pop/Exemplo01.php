<?php 
$frutas = array("maçã", "banana","laranja");

echo "Array Original:";
echo "<pre>";
print_r($frutas);
echo "</pre>";

array_push($frutas, "uva", "abacaxi");
echo "Array com Push:";
echo "<pre>";
print_r($frutas);
echo "</pre>";

$ultima_fruta = array_pop($frutas);

echo "Elemento removido: " . $ultima_fruta;
echo "<br>";
echo "Array após remoção:";
echo "<pre>";
print_r($frutas);
echo "</pre>";


?>