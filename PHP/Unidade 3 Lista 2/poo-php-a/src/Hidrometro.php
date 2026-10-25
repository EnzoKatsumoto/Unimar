<?php

namespace App;

use InvalidArgumentException;

class Hidrometro

{
    public function __construct(
    public string $identificacao,
    private float $leituraAnterior,
    private float $leituraAtual
    ){
        if ($this->leituraAnterior < 0){
            throw new InvalidArgumentException ("A leitura não pode ser negativa.");
        }

        if ($this->leituraAtual < 0){
            throw new InvalidArgumentException ("A leitura não pode ser negativa.");
        }

    }

    public function registrarLeitura(float $novaLeitura): bool
    {
        if ($novaLeitura < $this->leituraAtual){
            return false;
        }

        $this->leituraAnterior = $this->leituraAtual;
        $this->leituraAtual = $novaLeitura;
        return true;
    }

    public function consumoUltimoPeriodo(): float
    {
        return $this->leituraAtual - $this->leituraAnterior;
    }

    public function estimarConta(float $precoPorM3): float
    {
        if ($precoPorM3 <= 0){
            throw new InvalidArgumentException ("O preço por m³ deve ser positivo.");
        }
        return $this->consumoUltimoPeriodo() * $precoPorM3;
    }

    public function resumo(): string
    {
        return "{$this->identificacao} - Leitura Anterior: {$this->leituraAnterior} | Leitura Atual: {$this->leituraAtual} | Consumo: {$this->consumoUltimoPeriodo()}";
    }
}


?>