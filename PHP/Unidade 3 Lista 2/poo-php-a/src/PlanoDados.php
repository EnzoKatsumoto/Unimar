<?php

namespace App;

use InvalidArgumentException;

class PlanoDados
{
    private int $consumoTotalGB;

    public function __construct(
    public string $cliente,
    private int $qtdGB
    ){
        if ($this->cliente == ""){
            throw new InvalidArgumentException ("Digite um nome válido.");

        }
        
        if ($this->qtdGB <= 0){
            throw new InvalidArgumentException ("O plano deve possuir franquia positiva.");

        }

        $this->consumoTotalGB = 0;

    }

    public function consumo(int $consumo): bool
    {
        if ($consumo > $this->qtdGB - $this->consumoTotalGB || $consumo <= 0){
            return false;

        }

        $this->consumoTotalGB = $this->consumoTotalGB + $consumo;
        return true;

    }

    public function contratarAdicional(int $GBs): bool
    {
        if ($GBs <= 0){
            return false;

        }

        $this->qtdGB = $this->qtdGB + $GBs;
        return true;
    }

    public function status(): string
    {
        return "Cliente: {$this->cliente} | Consumo (GB): {$this->consumoTotalGB}/{$this->qtdGB}";
    }

}

?>