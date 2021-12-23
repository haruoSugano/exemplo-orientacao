<?php
//autoload
spl_autoload_register(function (string $nomeCompletoDaClasse){ // função que realiza o require
    //Helio\Banco\Modelo\Endereco transformar em ->
    //src/Modelo/Endereco.php
    //str_replace(search: '', replace: '', $variavel)
    $caminhoArquivo = str_replace('Helio\\Banco', 'src', $nomeCompletoDaClasse); // Helio\Banco por src
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);// trocando \ por /
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});
?>