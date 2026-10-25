<?php

namespace App;

use InvalidArgumentException;

class CofrinhoMeta
{
    public function __construct(
    public string $objetivo,
    private float $saldo,
    private float $meta
    ){
        if ($this->objetivo == ""){
            throw new InvalidArgumentException ("Declare um objetivo válido.");
        }

        if ($this->meta <= 0){
            throw new InvalidArgumentException ("A meta deve ser maior que 0.");
        }

    }

    public function depositar(float $valor): bool
    {
        if ($valor <= 0){
            return false;
        }

        $this->saldo = $this->saldo + $valor;
        return true;

    }

    public function retirar(float $valor): bool
    {
        if ($valor <= 0){
            return false;
        }

        if ($valor > $this->saldo){
            return false;
        }

        $this->saldo = $this->saldo - $valor;
        return true;

    }

    public function percentualDaMeta(): float
    {
        return ($this->saldo / $this->meta) * 100;
    }

    public function MetaAtingida(): bool
    {
        if ($this->saldo >= $this->meta){
            return true;
        }

        return false;

    }

    public function resumo(): string
    {
        return "{$this->objetivo} - Saldo: R$" . $this->saldo . " Meta: R$" . $this->meta . " Progresso(%): {$this->percentualDaMeta()}/100"; 
    }

}


?>