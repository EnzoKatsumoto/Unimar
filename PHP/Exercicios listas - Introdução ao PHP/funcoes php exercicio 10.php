<?php
$produtos = [
    [
        "nome" => "Arroz",
        "preco" => 25.50,
        "estoque" => 15
    ],
    [
        "nome" => "Feijao",
        "preco" => 10.50,
        "estoque" => 30,
    ],
    [
        "nome" => "Laranja",
        "preco" => 4.00,
        "estoque" => 25,
    ],
    [
        "nome" => "Agua",
        "preco" => 3.50,
        "estoque" => 40
    ],
    [
        "nome" => "Oleo",
        "preco" => 8.99,
        "estoque" => 20
    ]
];
echo "--- Mercadinho Bom Dia --- \n \n"
foreach ($produtos as $p) {
    echo "Produto " . $p["nome"] . "\n";
    echo "Preço: R$ " . number_format($p["preco"], 2 . "\n");
    echo "Estoque: " . $p["estoque"] . "unidades \n";
    echo "----------------------- \n";
}
while (true) {
    $item = readline("Digite o nome do item que voce deseja comprar (ou 'sair' para finalizar): ")
    if $item == "sair"{
        break};
    elseif $item == "Arroz"{
        $qtd = readline("Digite a quantidade de $item que voce deseja");
        $produtos["nome"]
}


?>