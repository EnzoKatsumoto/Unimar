<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Pessoa;

# cria um novo objeto a partir da Classe Pessoa
$pessoa = new Pessoa('Valdir', 30);
echo $pessoa->apresentar() . PHP_EOL;

$pessoa2 = new Pessoa('João', 22);
echo $pessoa2->apresentar() . PHP_EOL;
