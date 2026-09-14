<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Retangulo;

$retangulo1 = new Retangulo(7, 6);
echo $retangulo1->area() . PHP_EOL;
echo $retangulo1->perimetro() . PHP_EOL;

if ($retangulo1->ehQuadrado()) {
    echo "Eh quadrado" . PHP_EOL;
} else {
    echo "Não é quadrado" . PHP_EOL;
}


$retangulo2 = new Retangulo(2, 2);
echo $retangulo2->area() . PHP_EOL;
echo $retangulo2->perimetro(). PHP_EOL;

if ($retangulo2->ehQuadrado()) {
    echo "Eh quadrado" . PHP_EOL;
} else {
    echo "Não é quadrado" . PHP_EOL;
}

?>