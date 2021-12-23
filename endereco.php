<?php

use Helio\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Guarulhos', 'Bairro qualquer', 'Rua qualquer', '123');
$outroEndereco = new Endereco('São Paulo', 'Algum bairro', 'Qualquer Rua', '354');

echo $umEndereco->bairro . PHP_EOL; // __get() 
echo $outroEndereco->cidade = "Nova Cidade"; // __set()

echo $umEndereco . PHP_EOL; // __toString()
echo $outroEndereco . PHP_EOL;

?>
