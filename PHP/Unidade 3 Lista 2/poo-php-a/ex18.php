<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\PlanoDados;

// Plano 1
$plano1 = new PlanoDados("Enzo", 67);
echo $plano1->status() . PHP_EOL;
$plano1->consumo(10);
echo $plano1->status() . PHP_EOL;
$plano1->consumo(50);
echo $plano1->status() . PHP_EOL;

// Tentativa de consumir mais dados do que o plano possui:
$plano1->consumo(30);
echo $plano1->status() . PHP_EOL;

// Contratando franquia adicional:
$plano1->contratarAdicional(23);
echo $plano1->status() . PHP_EOL;

$plano1->consumo(30);
echo $plano1->status() . PHP_EOL;

// Plano 2
$plano2 = new PlanoDados("Paulo", 7);
$plano2->consumo(6);
echo $plano2->status();

?>