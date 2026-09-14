<?php
$n = readline("Digite um numero qualquer: ");
function quadrado($n){
    return $n * $n;
}
function mostrarQuadrado($n){
    return quadrado($n);
}
echo quadrado($n) . "\n";
echo mostrarQuadrado($n);
?>