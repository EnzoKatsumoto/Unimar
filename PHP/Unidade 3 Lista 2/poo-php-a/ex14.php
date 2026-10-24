<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . "/vendor/autoload.php";

use App\BateriaDispositivo;

$dispositivo1 = new BateriaDispositivo("Robo Aspirador", 47);
echo $dispositivo1->status() . PHP_EOL;
$dispositivo1->usar(20);
echo $dispositivo1->status() . PHP_EOL;
$dispositivo1->usar(200);
echo $dispositivo1->status() . PHP_EOL;
echo $dispositivo1->carregar(50) . PHP_EOL;
echo $dispositivo1->status() . PHP_EOL;
echo $dispositivo1->carregar(80) . PHP_EOL;
echo $dispositivo1->status() . PHP_EOL;
?>