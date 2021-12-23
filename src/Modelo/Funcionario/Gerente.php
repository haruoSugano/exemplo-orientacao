<?php

namespace Helio\Banco\Modelo\Funcionario;

use Helio\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}

?>
