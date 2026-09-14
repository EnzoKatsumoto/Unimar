<?php
$n = readline("Digite o numero que voce quer descobrir a tabuada: ");
$i = 0;
while ($i <= 10){
    $resultado = $n * $i;
    echo "$n x $i = $resultado \n";
    $i++;
}
?>