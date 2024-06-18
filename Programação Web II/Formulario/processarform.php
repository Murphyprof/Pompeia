<?php 
// if(isset($_GET['opcao'])){
//     $opcao = $_GET['opcao'];
//     echo "Sua escolha foi..." . $opcao;
//     echo "<br><br>";
// }else{
//     echo "Selecione alguma equipe de F1... <br>";
// }

// if(isset($_GET['escolha'])){
//     $multi = $_GET['escolha'];
//     echo "Sua banda preferida.... <br><br>";
//     for($i = 0; $i < count($multi); $i++){
//         echo "Escolha " . $i . ":" . $multi[$i] . "<br><br>";
//     }
// }else{
//     echo "Selecione alguma banda.... <br><br>";
// }   

// if(isset($_GET['desenho'])){
//     echo "O desenho escolhido é: <mark>" . $_GET['desenho'];
// }


//Melhorando o código acima:
// if(isset(($_GET['opcao']), ($_GET['escolha']),($_GET['desenho']))){
//     $opcao = $_GET['opcao'];
//     $escolha = $_GET['escolha'];
//     $bandas= $_GET['desenho'];

//     echo "Sua escolha para equipes de F1 foi: " . $opcao;
//     echo "<br><br>";

//     echo "Suas outras escolhas foram : <br>";
//     for($i = 0; $i < count($escolha); $i++) {
//         echo "Escolha " . $i . ":" . $escolha[$i] . "<br>";
//     }
//     echo "<br><br>";
//     echo "O desenho escolhido é: <mark>" . $desenho;
// }else{
//     echo "Faltou selecionar alguma das opções. <br>";
// }

//Orientado a Objeto
class Escolhas{
    public function processarEscolhas($opcao, $escolha, $desenho){
        if(isset($opcao, $escolha, $desenho)){
            echo "Sua escolha foi... " . $opcao;
            echo "<br><br>";
            echo "Suas outras escolhas... <br>";
            foreach($escolha as $indice => $escolha_a){
                echo "Escolha ". $indice . ":" . $escolha_a . "<br>";
            }
            echo "<br><br>";
            echo "O desenho escolhido é... <mark> " . $desenho . "</mark>";
        }else{
            echo "Faltou selecionar alguma das opções... <br>";
        }
    }
}

//Instanciando a classe Escolhas.
$pesquisa = new Escolhas();

//Valores do Form.
$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : null;
$escolha = isset($_GET['escolha']) ? $_GET['escolha'] : null;
$desenho = isset($_GET['desenho']) ? $_GET['desenho'] : null;

$pesquisa -> processarEscolhas($opcao, $escolha, $desenho);

?>