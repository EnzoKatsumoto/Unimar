<?php

namespace App;

use InvalidArgumentException;

class DroneInspecao

{
    public function __construct(
    public string $modelo,
    private int $bateria,
    private float $distanciaTotal,
    private bool $emVoo
    ){
        if ($this->modelo == ""){
            throw new InvalidArgumentException ("Insira um modelo válido.");
        }
    }

    public function decolar(): bool
    {
        if ($this->bateria >= 20 && $this->emVoo == false){
            $this->emVoo = true;
            return true;
        }

        return false;
    }

    public function voar(float $km): bool
    {
        if ($km <= 0){
            throw new InvalidArgumentException("Insira uma distância válida.");
        }

        if ($km * 5 > $this->bateria){
            return false;
        }

        $this->bateria = $this->bateria - $km*5;
        $this->distanciaTotal = $this->distanciaTotal + $km;
        return true;
    }

    public function pousar(): bool
    {
        if ($this->emVoo == true){
            $this->emVoo = false;
            return true;
        }
        return false;

    }

    public function recarregar(int $percentual): int
    {
        if ($percentual <= 0){
            throw new InvalidArgumentException ("Insira uma carga válida.");
        }
        if ($this->bateria + $percentual > 100){
            $adicionado = 100 - $this->bateria;
            $this->bateria = 100;
            return $adicionado; //retorna a quantidade real de bateria carregada
        }
        $this->bateria = $this->bateria + $percentual;
        return $percentual;
    }

    public function status(): string
    {
        if ($this->emVoo == true){
            return "Bateria: {$this->bateria}% | Distância: {$this->distanciaTotal} Km | Situação do voo: Em Voo";
        }

        if ($this->emVoo == false){
            return "Bateria: {$this->bateria}% | Distância: {$this->distanciaTotal} Km | Situação do voo: Disponível";
        }
    }
}

?>