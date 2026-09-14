<?php
namespace App;

use InvalidArgumentException;

Class ProdutoEstoque
{


    public function __construct(
        private string $nome,
        private float $preco,
        private int $estoque
    ){
        if ($nome == ""){
        throw new InvalidArgumentException("Digite um produto válido");
        }
        if ($preco <= 0){
        throw new InvalidArgumentException("Digite um valor maior que 0");
        }
        if ($estoque < 0){
        throw new InvalidArgumentException("Digite uma quantidade válida");
        }
    }

    public function aplicarDesconto(float $percentual): void
    {
        if ($percentual <= 0){
            throw new InvalidArgumentException("Digite um desconto válido");
        }
        if($percentual > 50){
            throw new InvalidArgumentException("O desconto máximo é 50%");
        }

        $this->preco = $this->preco - ($this->preco * $percentual/100);
    }

    public function repor(int $quantidade): void
    {
        if ($quantidade <= 0){
            throw new InvalidArgumentException("Insira uma quantidade válida");
        }
        $this->estoque = $this->estoque + $quantidade;    
    }

    public function reservar(int $quantidade): void
    {
        if ($quantidade <= 0){
            throw new InvalidArgumentException("Insira uma quantidade válida");
        }
        if ($quantidade > $this->estoque){
            throw new InvalidArgumentException("Não há quantidade suficiente no estoque");
        }
        $this->estoque = $this->estoque - $quantidade;
    }

    public function consultarPreco(): float
    {
        return $this->preco;
    }

    public function consultarEstoque(): int
    {
        return $this->estoque;
    }
    
    public function resumo(): string
    {
        return "Produto: {$this->nome} | Preço: R$" . $this->preco . " | Qtd no estoque: {$this->estoque}";
    }

}

?>