<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\DroneInspecao;

$drone1 = new DroneInspecao("Drone Rural", 67, 0, false);
echo $drone1->status() . PHP_EOL;
$drone1->decolar();
echo $drone1->status() . PHP_EOL;
$drone1->voar(10);
echo $drone1->status() . PHP_EOL;
$drone1->pousar();
echo $drone1->status() . PHP_EOL;

//tentativa de decolagem sem bateria minima (20%):
$drone1->decolar();
echo $drone1->status() . PHP_EOL;

//tentativa de recarga acima do limite (100%):
echo $drone1->recarregar(200) . PHP_EOL;
echo $drone1->status() . PHP_EOL;
?>