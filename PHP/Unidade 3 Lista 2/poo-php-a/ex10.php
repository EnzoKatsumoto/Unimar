<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\CofrinhoMeta;

$objetivo1 = new CofrinhoMeta("Viagem Em Família", 1500.00, 5000.00);
echo $objetivo1->resumo() . PHP_EOL;

$objetivo1->depositar(400);
echo $objetivo1->resumo() . PHP_EOL;
$objetivo1->retirar(275);
echo $objetivo1->resumo() . PHP_EOL;
$objetivo1->depositar(3375);
echo $objetivo1->resumo() . PHP_EOL;

//Fazendo retiradas e depósitos inválidos:

$objetivo1->depositar(-40);
echo $objetivo1->resumo() . PHP_EOL;
$objetivo1->retirar(9000);
echo $objetivo1->resumo() . PHP_EOL;


?>