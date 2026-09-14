<?php
$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");
$n3 = readline("Digite a terceira nota: ");
function media ($n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3)/3;
    return $media;
}
$resultado = media($n1, $n2, $n3);
echo "A media final e $resultado";
?>