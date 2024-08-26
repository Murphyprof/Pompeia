<?php 
$config = array(
    "idioma" => "pt_BR",
    "moeda" => "BRL",
    "timezone" => "America/Sao_Paulo"
);
echo "Usando var_dump";
echo "<pre>";
echo var_dump($config, true);
echo "</pre>";

echo "Usando print_r";
echo "<pre>";
echo print_r($config, true);
echo "</pre>";

echo "Usando var_export";
echo "<pre>";
echo var_export($config, true);
echo "</pre>";

?>