<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\RoboArena;

// Criando dois robôs com estados iniciais diferentes

$robo1 = new RoboArena("Titan", 100, 100);
$robo2 = new RoboArena("Atlas", 150, 80);
echo $robo1->status() . PHP_EOL;
echo $robo2->status() . PHP_EOL;


$robo1->treinar(10);
echo $robo1->status() . PHP_EOL;

$robo1->batalhar(4);
echo $robo1->status() . PHP_EOL;
$robo1->recarregar(200);
echo $robo1->status() . PHP_EOL;
$robo1->batalhar(5);
echo $robo1->status() . PHP_EOL;
$robo1->recarregar(50);
echo $robo1->status() . PHP_EOL;
$robo1->batalhar(2);
echo $robo1->status() . PHP_EOL;
?>