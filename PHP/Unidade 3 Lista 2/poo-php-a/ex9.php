<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\PersonagemRPG;

$personagem1 = new PersonagemRPG("Rogério", "Guerreiro");
echo $personagem1->status() . PHP_EOL;
$personagem1->receberDano(20);
echo $personagem1->status() . PHP_EOL;
$personagem1->usarHabilidade(67);
echo $personagem1->status() . PHP_EOL;
$personagem1->curar(15);
echo $personagem1->status() . PHP_EOL;
$personagem1->descansar(30);
echo $personagem1->status() . PHP_EOL;