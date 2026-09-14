<?php
$numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,];
$pares = [];
$impares = [];
function separarParesEImpares($numeros){
    foreach ($numeros as $n){
        if ($n % 2 == 0){
            $pares[] = $n;
        }
        else{
            $impares[] = $n;
        }
    }
    return [
        "pares" => $pares,
        "impares" => $impares
    ];
}
print_r(separarParesEImpares($numeros));
?>