<?php

require_once './autoload.php';

use Helio\Banco\Service\ControleDeBonificacao;
use Helio\Banco\Modelo\{Cpf};
use Helio\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};


$funcionario01 = new Desenvolvedor(
    'Helio',
    new Cpf('123.123.123-10'),
    1000
);

$funcionario01->sobeNivel();

$gerente = new Gerente(
    'Takamori',
    new Cpf('456.789.123-10'),
    4000
);

$diretor = new Diretor(
    'Sugano',
    new Cpf('456.789.654-10'),
    5000
);

$editorVideo = new EditorVideo(
    'editor',
    new Cpf('265.987.456-12'),
    1500
);

$controlador = new ControleDeBonificacao();
$controlador->adicionarBonificacao($funcionario01);

$controlador0= new ControleDeBonificacao();
$controlador0->adicionarBonificacao($gerente);
$controlador0->adicionarBonificacao($diretor);
$controlador0->adicionarBonificacao($editorVideo);

echo $controlador->getTotal() . PHP_EOL;
echo $controlador0->getTotal(). PHP_EOL;

?>
