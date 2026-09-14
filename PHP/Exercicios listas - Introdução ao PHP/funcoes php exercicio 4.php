<?php
$texto = readline("Digite uma mensagem: ");
function mensagem($texto = "Sem mensagem"){
    if ($texto == ""){
        return $texto = "Sem mensagem";
    }
    else{
        return $texto;

    }
}
echo mensagem($texto);
?>