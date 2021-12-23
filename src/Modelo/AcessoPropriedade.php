<?php

namespace Helio\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get(string $nomeAtributo)
    {
        //rua -> getRua
        $metodo = ucfirst($nomeAtributo);
        $metodo = 'get' . $metodo;
        return $this->$metodo();
    }

    public function __set($nomeAtributo, $value): void
    {
        $metodo = 'set' . ucfirst($nomeAtributo);
        $this->$metodo($value);
    }

    public function __toString(): string
    {   
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}

?>
