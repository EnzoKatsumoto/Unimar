<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\TicketEstacionamento;

$veiculo1 = new TicketEstacionamento("EZQ-4321", 0, 40, 5.00);
echo $veiculo1->resumo() . PHP_EOL;
$veiculo1->registrarSaida(60);
echo $veiculo1->resumo() . PHP_EOL;
$veiculo1->registrarSaida(125);
echo $veiculo1->resumo();

?>