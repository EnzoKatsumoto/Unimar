<?php
$nota = readline("Digite a nota do aluno: ");
if ($nota < 5){
    echo "O aluno esta reprovado.";
}
elseif ($nota >= 5 && $nota < 7){
    echo "O aluno esta de recuperacao.";
}
else{
    echo "O aluno esta aprovado.";
}
?>