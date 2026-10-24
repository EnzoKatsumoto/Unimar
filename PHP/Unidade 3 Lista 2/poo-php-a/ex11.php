<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\CartaoTransporte;

$cartao1 = new CartaoTransporte("Enzo", 20.00, 4.25);
echo $cartao1->resumo() . PHP_EOL;
$cartao1->recarregar(5);
echo $cartao1->resumo() . PHP_EOL;
$cartao1->embarcar();
echo $cartao1->resumo() . PHP_EOL;
$cartao1->embarcar();
echo $cartao1->resumo() . PHP_EOL;
$cartao1->embarcar();
echo $cartao1->resumo() . PHP_EOL;
$cartao1->embarcar();
echo $cartao1->resumo() . PHP_EOL;
$cartao1->embarcar();
echo $cartao1->resumo() . PHP_EOL;
$cartao1->embarcar();
echo $cartao1->resumo() . PHP_EOL;


?>