<?php

namespace Helio\Banco\Modelo\Funcionario;

use Helio\Banco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600.0;
    }
}

?>
