<?php

namespace Helio\Banco\Service;

use Helio\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->autenticar($senha)){
            echo "Ok. Usuário está logado" . PHP_EOL;
        }
        else {
            echo "Ops. dados incorretos" . PHP_EOL;
        }
    }
}

?>
