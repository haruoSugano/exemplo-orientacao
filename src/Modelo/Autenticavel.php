<?php

namespace Helio\Banco\Modelo;

interface Autenticavel
{
    public function autenticar(string $senha): bool;
}

?>
