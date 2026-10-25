<?php

namespace App;

use InvalidArgumentException;

class TicketEstacionamento
{

    public function __construct(
    public string $placa,
    private int $entradaMin,
    private int $saidaMin,
    private float $tarifaHora
    ){

        if ($this->tarifaHora <= 0){
            throw new InvalidArgumentException ("O valor da tarifa deve ser positivo.");
        }

    }

    public function registrarSaida(int $minuto): bool
    {
    if ($minuto <= $this->entradaMin){
        throw new InvalidArgumentException ("A saida deve ser após a entrada.");
    }
    $this->saidaMin = $minuto;
    return true;

    }

    public function duracaoMin(): int
    {
        return $this->saidaMin - $this->entradaMin;

    }

    public function valorAPagar(): float
    {
        return ceil($this->duracaoMin()/60) * $this->tarifaHora;
    }

    public function resumo(): string
    {
        return "Placa: {$this->placa} | Duração: {$this->duracaoMin()} | Valor a pagar: R$" . $this->valorAPagar();
    }
}


?>