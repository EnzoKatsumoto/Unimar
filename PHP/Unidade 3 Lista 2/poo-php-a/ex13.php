<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\MaquinaSnack;

$produto1 = new MaquinaSnack("Batata Chips", 5.49);
echo $produto1->status() . PHP_EOL;
$produto1->reabastecer(1);
echo $produto1->status() . PHP_EOL;

// falta de crédito:
$produto1->comprar();
echo $produto1->status() . PHP_EOL;

$produto1->inserirCredito(20);
echo $produto1->status() . PHP_EOL;

$produto1->comprar();
echo $produto1->status() . PHP_EOL;

//falta de estoque:

$produto1->comprar();
echo $produto1->status() . PHP_EOL;

//devolvendo credito:
$produto1->devolverCredito();
echo $produto1->status() . PHP_EOL;
?>