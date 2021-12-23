<?php

namespace Helio\Banco\Service;

use Helio\Banco\Modelo\Funcionario\Funcionario;

class ControleDeBonificacao
{
    private $totalBonificacao = 0;

    public function adicionarBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotal(): float
    {
        return $this->totalBonificacao;
    }
}
?>
