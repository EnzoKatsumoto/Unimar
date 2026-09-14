<?php
$nome = readline("Digite o nome do aluno: ");
$n1 = readline("Digite a primeira nota de $nome: ");
$n2 = readline("Digite a segunda nota de $nome: ");
$n3 = readline("Digite a terceira nota de $nome: ");
function calcularMedia($n1, $n2, $n3){
    return (($n1 + $n2 + $n3)/3);
}
function resultadoAluno($nome, $n1, $n2, $n3){
    if (calcularMedia($n1, $n2, $n3) >= 7){
        return "O aluno $nome teve como media final " . calcularMedia($n1, $n2, $n3) . "\n APROVADO";
    }
    elseif (calcularMedia($n1, $n2, $n3) >= 5){
        return "O aluno $nome teve como media final" . calcularMedia($n1, $n2, $n3) . "\n RECUPERACAO";
    }
    else{
        return "O aluno $nome teve como media final" . calcularMedia($n1, $n2, $n3) . "\n REPROVADO";
    }
}
echo resultadoAluno($nome, $n1, $n2, $n3);
?>