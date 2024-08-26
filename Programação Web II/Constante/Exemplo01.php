<?php 
define("TAXA_IMPOSTO", 0.08);

class Produto{
    const DESCONTO_MAXIMO = 0.2;

    public function calcularPrecoComImposto($preco){
        return $preco * (1 + TAXA_IMPOSTO);
    }
    public function aplicarDesconto($preco){
        return $preco * (1 - self::DESCONTO_MAXIMO);    }
}

$produto = new Produto();

echo "Preço com imposto R$: " . $produto->calcularPrecoComImposto(100);
echo"<br>";
echo "Preço com desconto R$: " . $produto->aplicarDesconto(100);
?>