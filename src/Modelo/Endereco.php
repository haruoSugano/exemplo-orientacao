<?php

namespace Helio\Banco\Modelo;

final class Endereco
{

    use AcessoPropriedade;// Quando colocado dentro de uma classe, significa que esta sendo 
    // utilizado por uma trait obs: isso não é herança

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade():string
    {
        return $this->cidade;
    }

    public function getBairro():string
    {
        return $this->bairro;
    }

    public function getRua():string
    {
        return $this->rua;
    }

    public function getNumero():string
    {
        return $this->numero;
    }

    public function setCidade($novaCidade): void
    {
        $this->cidade = $novaCidade;
    }
    
}

?>
