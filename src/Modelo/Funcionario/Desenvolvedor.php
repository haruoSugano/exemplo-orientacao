<?php

namespace Helio\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario 
{
    public function sobeNivel()
    {
        return $this->recebeAumento($this->getSalario() * 0.75);
    }
    
    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}

?>
