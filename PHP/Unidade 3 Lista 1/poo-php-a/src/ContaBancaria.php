<?php
namespace App;

use InvalidArgumentException;

Class ContaBancaria
{
    public function __construct(
        private string $titular,
        private float $saldo
    ){
        if ($saldo < 0){
            throw new InvalidArgumentException("Saldo Inválido");
        }
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0){
            throw new InvalidArgumentException("Só é possível depositar valores positivos");
        }
         $this->saldo = $this->saldo + $valor;
    }
    
    public function sacar(float $valor): void
    {
        if ($valor <= 0){
            throw new InvalidArgumentException("Só é possível sacar valores positivos");
        }
        if ($valor > $this->saldo){
            throw new InvalidArgumentException("Saldo insuficiente");
        }
         $this->saldo = $this->saldo - $valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

    public function resumo(): string
    {
        return "Titular: {$this->titular} | Saldo: R$" . number_format($this->saldo, 2, ',', '.');
    }   
}
?>