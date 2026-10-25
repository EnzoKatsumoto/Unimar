<?php

namespace App;

use InvalidArgumentException;

class MaquinaSnack
{
    private int $estoque;
    private float $credito;

    public function __construct(
    public string $produto,
    private float $preco
    ){
        $this->estoque = 0;
        $this->credito = 0;
    }

    public function reabastecer(int $quantidade): bool
    {
        if ($quantidade <= 0){
            return false;
        }

        $this->estoque = $this->estoque + $quantidade;
        return true;

    }

    public function inserirCredito(float $valor): bool
    {
        if ($valor <= 0){
            return false;
        }

        $this->credito = $this->credito + $valor;
        return true;

    }

    public function comprar(): bool
    {
        if ($this->credito >= $this->preco && $this->estoque > 0){
            $this->credito = $this->credito - $this->preco;
            $this->estoque = $this->estoque - 1;
            return true;
        }

        return false;
    }

    public function devolverCredito(): float
    {
        return $this->credito = 0;
    }

    public function status(): string
    {
        return "Produto: {$this->produto} | Preço: {$this->preco} | Estoque: {$this->estoque} | Crédito: {$this->credito}";
    }
    
}


?>