<?php

namespace Helio\Banco\Modelo\Funcionario;

use Helio\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}

?>
