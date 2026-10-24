<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\LampadaInteligente;

$lampada1 = new LampadaInteligente("Quarto");
echo $lampada1->status() . PHP_EOL;

$lampada2 = new LampadaInteligente("Sala");
echo $lampada2->status() . PHP_EOL;

$lampada2->ajustarIntensidade(100);
echo $lampada2->status() . PHP_EOL;

// Tentando inserir uma intensidade inválida

$lampada1->ajustarIntensidade(-4);
echo$lampada1->status();


?>