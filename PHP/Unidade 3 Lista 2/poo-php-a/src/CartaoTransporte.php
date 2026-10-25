<?php

namespace App;

use InvalidArgumentException;

class CartaoTransporte

{
    private int $viagensRealizadas;

    public function __construct(
    public string $titular,
    private float $saldo,
    private float $tarifa
    
    ){
        $this->viagensRealizadas = 0;
        if ($this->tarifa <= 0){
            throw new InvalidArgumentException ("A tarifa deve ser positiva.");

        }
    }

    public function recarregar(float $valor): bool
    {
        if ($valor <= 0){
            return false;
        }

        $this->saldo = $this->saldo + $valor;
        return true;
    }

    public function embarcar(): bool
    {
        if ($this->saldo < $this->tarifa){
            return false;
        }

        $this->saldo = $this->saldo - $this->tarifa;
        $this->viagensRealizadas = $this->viagensRealizadas + 1;
        return true;
        
    }

    public function saldoAtual(): float
    {
        return $this->saldo;
    }

    public function viagensRealizadas(): int
    {
        return $this->viagensRealizadas;
    }

    public function resumo(): string
    {
        return "{$this->titular} - Saldo: R$" . $this->saldo . " Viagens Realizadas: {$this->viagensRealizadas}";
    }
}


?>