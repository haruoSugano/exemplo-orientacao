<?php

namespace Helio\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    /**
     * Tranferir
     *
     * @param float $valorATransferir
     * @param Conta $contaDestino
     * @return void
     */
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this -> saldo) {
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
        
        $this -> sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
?>