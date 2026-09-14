<?php

namespace App;

use InvalidArgumentException;

class DroneEntrega
{
    private int $bateria;
    private float $cargaAtualKg;
    private string $status;

    public function __construct(
        private int $identificador,
        private float $cargaMaximaKg
    ){
        if ($this->identificador <= 0){
            throw new InvalidArgumentException("Identificador inválido.");
        }

        if ($this->cargaMaximaKg <= 0){
            throw new InvalidArgumentException(
                "A carga máxima deve ser um valor positivo.");
        }

        $this->bateria = 100;
        $this->cargaAtualKg = 0.0;
        $this->status = "disponível";
    }

    public function carregarPacote(float $peso): void
    {
        if ($peso <= 0){
            throw new InvalidArgumentException("Insira uma carga válida.");
        }

        if ($this->cargaAtualKg + $peso > $this->cargaMaximaKg){
            throw new InvalidArgumentException("O peso ultrapassa a carga máxima.");
        }

        if ($this->status != "disponível"){
            throw new InvalidArgumentException("Esse drone está indisponível no momento.");
        }

        $this->cargaAtualKg += $peso;
    }

    public function decolar(float $distanciaKm): void
    {
        if ($this->cargaAtualKg == 0){
            throw new InvalidArgumentException("O drone deve estar carregado para decolar.");
        }

        if ($distanciaKm <= 0){
            throw new InvalidArgumentException("Insira uma distância válida.");
        }

        $consumo = $this->consumoEstimado($distanciaKm);

        if ($this->bateria < $consumo){
            throw new InvalidArgumentException("Bateria insuficiente.");
        }

        $this->bateria -= $consumo;

        $this->status = "em_voo";
    }

    private function consumoEstimado(float $distanciaKm): int
    {
        return (int) ceil($distanciaKm / 2);
    }

    public function finalizarEntrega(): void
    {
        if ($this->status != "em_voo"){
            throw new InvalidArgumentException("O drone não está em voo.");
        }

        $this->cargaAtualKg = 0.0;
        $this->status = "disponível";
    }

    public function recarregar(): void
    {
        if ($this->status == "em_voo"){
            throw new InvalidArgumentException("Não é possível recarregar durante o voo.");
        }

        $this->bateria = 100;
    }

    public function status(): string
    {
        return "Drone: {$this->identificador} | "
            . "Bateria: {$this->bateria}/100 | "
            . "Carga Atual: {$this->cargaAtualKg}kg | "
            . "Carga Máxima: {$this->cargaMaximaKg}kg | "
            . "Status: {$this->status}";
    }
}
?>