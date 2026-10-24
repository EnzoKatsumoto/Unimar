<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\Astronauta;

$astronauta = new Astronauta(
    "Enzo",
    100,
    100,
    100,
    2
);

echo $astronauta->resumo() . PHP_EOL;

$astronauta->explorar(30, 40);

echo $astronauta->resumo() . PHP_EOL;

$astronauta->sofrerDano(50);

echo $astronauta->resumo() . PHP_EOL;

$astronauta->alimentar(30);

echo $astronauta->resumo() . PHP_EOL;

$astronauta->descansar(20);

echo $astronauta->resumo() . PHP_EOL;

// Aqui o oxigênio chega exatamente a zero
$astronauta->explorar(40, 60);

echo $astronauta->resumo() . PHP_EOL;

// Recupera da condição crítica
$astronauta->usarCilindro(50);

echo $astronauta->resumo() . PHP_EOL;