<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\Hidrometro;

$hidrometro1 = new Hidrometro("67420", 80.00, 143.74);
echo $hidrometro1->resumo() . PHP_EOL;
$hidrometro1->registrarLeitura(200.00);
echo $hidrometro1->resumo() . PHP_EOL;
$hidrometro1->registrarLeitura(289.31);
echo $hidrometro1->resumo() . PHP_EOL;
$hidrometro1->registrarLeitura(357.50);
echo $hidrometro1->resumo() . PHP_EOL;

//leitura inválida:

$hidrometro1->registrarleitura(5);
echo $hidrometro1->resumo() . PHP_EOL;

?>