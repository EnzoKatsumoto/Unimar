<?php
$nota = readline("Digite a media final de um aluno: ");
function verificarAprovacao($nota){
    if ($nota >= 7){
        return "Aprovaçao";
    }
    elseif ($nota >= 5){
        return "Recuperaçao";
    }
    else{
        return "Reprovaçao";
    }
}
echo "A media final do aluno resulta em ". verificarAprovacao($nota)
?>