<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\SmartLocker;

// Armário 1:

$armario1 = new SmartLocker();
// O armário está vazio
echo $armario1->status() . PHP_EOL;
// Recebendo a primeira encomenda:
$armario1->receberEncomenda();
echo $armario1->status() . PHP_EOL;
// Tentativa de retirada 1 (código errado)
$armario1->retirada(10);
echo $armario1->status() . PHP_EOL;
// Tentativa de retirada 2 (código errado)
$armario1->retirada(9);
echo $armario1->status() . PHP_EOL;
// Tentativa de retirada 3 (código errado)
$armario1->retirada(67);
echo $armario1->status() . PHP_EOL;
// Desbloqueando o armário:
$armario1->desbloquear();
echo $armario1->status() . PHP_EOL;
// Tentativa de retirada 1 (código correto)
$armario1->retirada(2);
echo $armario1->status() . PHP_EOL;
$armario1->receberEncomenda();
echo $armario1->status() . PHP_EOL;

// Armário 2:

$armario2 = new SmartLocker();
echo $armario2->status();
?>