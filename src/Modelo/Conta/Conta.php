<?php

namespace Helio\Banco\Modelo\Conta;

use Helio\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    // definir dados da conta:
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0; //private static $codigoBanco = 77; valor estático

    //Método construtor
    //Iniciando com valores
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0; // valor inicial

        //Conta::$numeroDeContas++;//atributo da classe é igual a
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if(self::$numeroDeContas > 2 ){
            echo "Há mais de uma conta ativa";
        }
    }

    /**
     * Sacar
     *
     * @param float $valorSacar
     * @return void
     */
    public function sacar(float $valorSacar)
    {
        $tarifaSaque = $valorSacar * $this->percentualTarifa();
        $valorSaque = $valorSacar + $tarifaSaque;
        if ($valorSacar > $this -> saldo){
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
        
        $this-> saldo -= $valorSaque;
    }

    /**
     * Depositar
     *
     * @param float $valorADepositar
     * @return void
     */
    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo" . PHP_EOL;
            return;
        }
    
        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float 
    {
        return $this->saldo;
    }

    public function getTitular():Titular
    {
        return $this->titular;
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa():float; // todas as classes herdado dela precisa ser implementada

}

?>
