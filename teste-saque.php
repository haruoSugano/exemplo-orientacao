<?php

use Helio\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Helio\Banco\Modelo\Cpf;
use Helio\Banco\Modelo\Endereco;

require_once './autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Helio',
        new Endereco('Guarulhos', "Bairro", "Rua", "37")
    ));

$conta->depositar(500);
$conta->sacar(100);

$contaPoupanca = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Helio',
        new Endereco('Guarulhos', "Bairro", "Rua", "37")
    ));

$contaPoupanca->depositar(500);
$contaPoupanca->sacar(100);

echo $conta->recuperarSaldo() . PHP_EOL;
echo $contaPoupanca->recuperarSaldo() . PHP_EOL;

?>
