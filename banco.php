<?php

require_once 'autoload.php';

use Helio\Banco\Modelo\Conta\{Conta, Titular};
use Helio\Banco\Modelo\{Cpf, Endereco};

$endereco1 = new Endereco('Guarulhos', 'bairro', 'rua', '74A');
$helio = new Conta(new Titular(new Cpf('123.456.789-10'), 'Helio Sugano', $endereco1));
$helio->depositar(500);
$helio->sacar(300);

echo $helio->getTitular()->getNome() . PHP_EOL;

$haruo = new Conta(new Titular(new Cpf('123.456.987-10'), 'Haruo Takamori', $endereco1));

echo $haruo->getTitular()->getNome() . PHP_EOL;

$endereco2 = new Endereco('São Paulo', 'bairro SP', 'rua SP', '10SP');
$outraConta = new Conta(new Titular(new Cpf('123.456.854-12'), 'abcdefg', $endereco2));
echo $outraConta->getTitular()->getNome() . PHP_EOL;

echo Conta::recuperarNumeroDeContas() . PHP_EOL;

?>
