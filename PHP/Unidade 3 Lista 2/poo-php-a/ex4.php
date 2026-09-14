<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\CronometroTreino;

$cronometro = new CronometroTreino("Musculação", 0);
echo $cronometro->formatarTempo() . PHP_EOL;
$cronometro->adicionarTempo(120);
echo $cronometro->totalMinutos() . PHP_EOL;
$cronometro->zerar();
echo $cronometro->formatarTempo() . PHP_EOL;
$cronometro->adicionarTempo(3600);
echo $cronometro->formatarTempo();

?>