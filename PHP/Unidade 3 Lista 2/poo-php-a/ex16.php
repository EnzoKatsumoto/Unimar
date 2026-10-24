<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\PacoteEntrega;

//pacote 1:

$pacote1 = new PacoteEntrega("6742", "Marília");
echo $pacote1->statusAtual() . PHP_EOL;
$pacote1->sairParaEntrega();
echo $pacote1->statusAtual() . PHP_EOL;
$pacote1->registrarFalha();
echo $pacote1->statusAtual() . PHP_EOL;
$pacote1->sairParaEntrega();
echo $pacote1->statusAtual() . PHP_EOL;

// Sucesso de entrega na 2° tentativa
$pacote1->confirmarEntrega();
echo $pacote1->statusAtual() . PHP_EOL;


//pacote 2:
$pacote2 = new PacoteEntrega("4267", "Lácio");
echo $pacote2->statusAtual() . PHP_EOL;
$pacote2->sairParaEntrega();
echo $pacote2->statusAtual() . PHP_EOL;
$pacote2->registrarFalha();
$pacote2->sairParaEntrega();
echo $pacote2->statusAtual() . PHP_EOL;
$pacote2->registrarFalha();

// 3° Tentativa Falha
$pacote2->sairParaEntrega();
echo $pacote2->statusAtual() . PHP_EOL;
$pacote2->registrarFalha();
echo $pacote2->statusAtual();
?>