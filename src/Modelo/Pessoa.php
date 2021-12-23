<?php

namespace Helio\Banco\Modelo;

use Helio\Banco\Modelo\Cpf;
abstract class Pessoa
{

    use AcessoPropriedade;
    
    //protected permiti que o filho da classe tenha acesso também
    protected string $nome; // protected consegue acessar as classes filhas 
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getCpf():string
    {
        return $this->cpf->getCpfNumero();
    }

    final protected function validaNomeTitular(string $nome)
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
        return $nome;
    }
}

?>
