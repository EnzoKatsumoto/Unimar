<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\Triangulo;

$triangulo1 = new Triangulo(3, 4, 5);

if ($triangulo1->ehValido() == true){
    echo "É válido." . PHP_EOL;
}
else{
    echo "É inválido." . PHP_EOL;
}

echo $triangulo1->classificar() . PHP_EOL;
echo $triangulo1->perimetro() . PHP_EOL;

$triangulo2 = new Triangulo (9, 9, 9);

$triangulo1 = new Triangulo(3, 4, 5);

if ($triangulo2->ehValido() == true){
    echo "É válido." . PHP_EOL;
}
else{
    echo "É inválido." . PHP_EOL;
}

echo $triangulo2->classificar() . PHP_EOL;
echo $triangulo2->perimetro() . PHP_EOL;

$triangulo3 = new Triangulo (4, 4, 6);

if ($triangulo3->ehValido() == true){
    echo "É válido." . PHP_EOL;
}
else{
    echo "É inválido." . PHP_EOL;
}

echo $triangulo3->classificar() . PHP_EOL;
echo $triangulo3->perimetro() . PHP_EOL;

$triangulo4 = new Triangulo (2, 2, 10);

if ($triangulo4->ehValido() == true){
    echo "É válido." . PHP_EOL;
}
else{
    echo "É inválido." . PHP_EOL;
}

echo $triangulo4->classificar() . PHP_EOL;
echo $triangulo4->perimetro() . PHP_EOL;