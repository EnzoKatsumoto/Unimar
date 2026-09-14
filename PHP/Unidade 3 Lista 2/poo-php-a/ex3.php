<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\IngressoCinema;

$ingresso1 = new IngressoCinema("Homem Aranha", 49.99, true);
$ingresso2 = new IngressoCinema("Homem Aranha", 49.99, false);

echo $ingresso1->resumo() . PHP_EOL;
echo $ingresso2->resumo() . PHP_EOL;

?>