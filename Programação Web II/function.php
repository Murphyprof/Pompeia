<?php 
//1-
function soma($num1, $num2) {
    $res = $num1 + $num2;
    return $res;
}
$resultado = soma(10, 5);
echo "Exercícios 01 - Resultado da soma: " . $resultado;
echo nl2br("\n");

// OU
function soma($num1, $num2) {
    return $num1 + $num2;
}
echo "Exercícios 01 - Resultado da soma: " . soma(10,5);
echo nl2br("\n");

//2-
function maiorValorArray($numeros) {
    $maior = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }

    return $maior;
}
$nums = [10, 100, 830, 10, 5];
$resultado = maiorValorArray($nums);
echo "Exercícios 02 - Maior valor: " . $resultado; 
echo nl2br("\n");

//3-
function contarCaracteres($texto) {
    return strlen($texto);
}

$texto = "pneumoultramicroscopicossilicovulcanoconiótico";
$resultado = contarCaracteres($texto);
echo "Exercícios 03 - Conta Caracteres: " . $resultado;
echo nl2br("\n");

//4- 
function converterParaMaiusculas($texto) {
    return strtoupper($texto);
}

$texto = "pittsburgh penguins";
$resultado = converterParaMaiusculas($texto);
echo "Exercícios 04 - Maiuscula: " . $resultado;
echo nl2br("\n");

//5- 
function verificarParOuImpar($numero) {
    if ($numero % 2 === 0) {
        return "par";
    } else {
        return "ímpar";
    }
}


$num1 = 2054;
$num2 = 999;

$resultado1 = verificarParOuImpar($num1);
$resultado2 = verificarParOuImpar($num2);

echo "Exercícios 05 - Verificar Par ou Impar: " . $resultado1; 
echo nl2br("\n");
echo "Exercícios 05 - Verificar Par ou Impar: " . $resultado2; 
echo nl2br("\n");

//6- 
function filtrarPorTamanho($strings) {
    $novoArray = array_filter($strings, function($string) {
        return strlen($string) > 5;
    });

    return $novoArray;
}

$palavras = ["casa", "carro", "banana", "bicicleta", "livro", "caneta"];

$novoArray = filtrarPorTamanho($palavras);

echo "Exercícios 06 - Tamanho por filtro: ";
print_r($novoArray);
echo nl2br("\n");

//7- 
function converterData($data) {
    $dataParts = explode('/', $data);
    $dataFormatoISO = $dataParts[2] . '-' . $dataParts[1] . '-' . $dataParts[0];
    return $dataFormatoISO;
}

$dataBrasil = "06/08/2023";
$dataISO = converterData($dataBrasil);
echo "Exercícios 07 - Converte data Americano: " . $dataISO;
echo nl2br("\n");

//OU

   function dataInver($data){
        $novoForm = date("Y-m-d",strtotime($data));
        return $novoForm;
    }
    echo "Exercícios 07 - Converte data Americano: " .  dataInver("15-03-2002");
    echo nl2br("\n");

//8- 
function calcularMedia($numeros) {
    $total = count($numeros);
    if ($total === 0) {
        return 0; 
    }

    $soma = array_sum($numeros);
    $media = $soma / $total;
    return $media;
}

$nums = [10, 5, 8, 20, 15];
$media = calcularMedia($nums);
echo "Exercícios 08 - Média: " . $media; 
echo nl2br("\n");

//OU 
 function medias(...$lista){
        $soma = array_sum($lista);
        $media = $soma / sizeof($lista);
        return $media;
    }
    
    echo "Exercícios 08 - Média: " . medias(8,8,9,10,9,8,9);
    echo nl2br("\n");
//9- 
function inverterStrings($strings) {
    $novoArray = array_map(function($string) {
        return strrev($string);
    }, $strings);

    return $novoArray;
}

$palavras = ["amor", "casa", "sol", "arara"];
$novoArray = inverterStrings($palavras);

echo "Exercícios 09 - Inverter Palavras: ";
print_r($novoArray);
echo nl2br("\n");

//10- 
function inverterFrase($frase) {
    $palavras = explode(' ', $frase);
    $fraseInvertida = implode(' ', array_reverse($palavras));
    return $fraseInvertida;
}

$frase = "O rato roeu a roupa";
$fraseInvertida = inverterFrase($frase);
echo "Exercícios 10 - Inverter Frase: " . $fraseInvertida;
?>