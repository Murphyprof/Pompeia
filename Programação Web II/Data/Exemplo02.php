<?php 
$data1 = strtotime("2024-06-18");
$data2 = strtotime("2024-12-24");
$dif_segundos = $data2 - $data1;
$dif_dias = $dif_segundos / (60 * 60 * 24);

echo "Diferença em segundo:" . $dif_segundos . "segundos";
echo "<br>";
echo "Diferença em dias:" . $dif_dias . "dias";
echo "<br>";

$data_hoje = new DateTime('2024-06-18');
$data_nasc = new DateTime('1981-08-20');

$intervalo = $data_hoje->diff($data_nasc);

echo "Intervalo é de {$intervalo->y} anos, {$intervalo->m} meses e {$intervalo->d} dias";


?>