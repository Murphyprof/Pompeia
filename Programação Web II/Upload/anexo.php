<?
$diretorio = "tmp" . DIRECTORY_SEPARATOR;
if(!is_dir($diretorio)){
    mkdir($diretorio, 0755, true);
}

foreach($_FILES as $arquivo){
    $nome = $arquivo['name'];
    $conteudo = file_get_contents($arquivo['tmp_name']);
    //salvando no disco.
    file_put_contents($diretorio . $nome, $conteudo);
}
?>