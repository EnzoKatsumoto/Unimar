<?php

// Nome: Enzo Katsumoto Amador RA: 2275834 Turma: BCC B 2° termo Disciplina: POO

require_once __DIR__ . '/vendor/autoload.php';

use App\Semaforo;

$semaforo = new Semaforo("Rua Bahia");
echo $semaforo->estado() . PHP_EOL;
$semaforo->avancar();
echo $semaforo->estado() . PHP_EOL;

if ($semaforo->podePassar() == true){
    echo "Pode passar." . PHP_EOL;
}

else{
    echo" Não pode passar." . PHP_EOL;
    }

$semaforo->avancar();
echo $semaforo->estado() . PHP_EOL;
$semaforo->avancar();
echo $semaforo->estado() . PHP_EOL;
$semaforo->avancar();
echo $semaforo->estado() . PHP_EOL;
$semaforo->avancar();
echo $semaforo->estado() . PHP_EOL;
$semaforo->avancar();
echo $semaforo->estado() . PHP_EOL;

?>