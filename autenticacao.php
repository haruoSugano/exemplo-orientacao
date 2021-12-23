<?php

use Helio\Banco\Modelo\Cpf;
use Helio\Banco\Modelo\Funcionario\Diretor;
use Helio\Banco\Modelo\Funcionario\Gerente;
use Helio\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$diretor = new Diretor(
    'Helio',
    new Cpf('123.456.789-45'),
    5000
);

$gerente = new Gerente(
    'Haruo',
    new Cpf('654.987.321-10'),
    2500
);

$autenticador->login($diretor, '4321');
$autenticador->login($diretor, '1234');

$autenticador->login($gerente, '4321');


?>
