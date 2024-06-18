<?php 
if(isset($_GET['opcao'])){
    $opcao = $_GET['opcao'];
    echo "Sua escolha foi..." . $opcao;
    echo "<br><br>";
}else{
    echo "Selecione alguma equipe de F1... <br>";
}

if(isset($_GET['escolha'])){
    $multi = $_GET['escolha'];
    echo "Sua banda preferida.... <br><br>";
    for($i = 0; $i < count($multi); $i++){
        echo "Escolha " . $i . ":" . $multi[$i] . "<br><br>";
    }
}else{
    echo "Selecione alguma banda.... <br><br>";
}   

if(isset($_GET['desenho'])){
    echo "O desenho escolhido é: <mark>" . $_GET['desenho'];
}


?>