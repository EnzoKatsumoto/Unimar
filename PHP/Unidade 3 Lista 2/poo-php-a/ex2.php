<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Temperatura;

$temperatura1 = new Temperatura(31);
echo $temperatura1->descricao() . PHP_EOL;

?>