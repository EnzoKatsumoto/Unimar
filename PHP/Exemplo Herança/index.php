<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Personagem;
use App\Guerreiro;
use App\Mago;

$personagem = new Personagem('Legolas');
echo $personagem->getNome() . PHP_EOL;
echo $personagem->getEnergia() . PHP_EOL;

$guerreiro = new Guerreiro('Thor');
echo $guerreiro->getNome() . PHP_EOL;
echo $guerreiro->getEnergia() . PHP_EOL;

echo $guerreiro->atacar() . PHP_EOL;
echo $guerreiro->getEnergia() . PHP_EOL;

$mago = new Mago ('Patolino, O mago implacável.');
echo $mago->getNome() . PHP_EOL;
echo $mago->getEnergia() . PHP_EOL;

echo $mago->lancarFeitico() . PHP_EOL;
echo $mago->getEnergia();