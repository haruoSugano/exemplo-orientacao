<?php

namespace Helio\Banco\Modelo\Conta;

use Helio\Banco\Modelo\{Autenticavel, Pessoa, Cpf, Endereco};

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);// parent:: consigo acessar a classe pai herdando assim os atributos
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }

}

?>
