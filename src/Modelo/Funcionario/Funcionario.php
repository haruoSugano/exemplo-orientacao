<?php

namespace Helio\Banco\Modelo\Funcionario;

use Helio\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);// chamar o construtor da classe base
        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setNome(string $nome):void
    {   
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    abstract public function calculaBonificacao(): float;

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo";
        }

        $this->salario += $valorAumento;
    }
}

?>
