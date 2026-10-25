<?php

namespace App;

use InvalidArgumentException;

class RoboArena
{
    
    private int $pontuacao;
    private int $energia;
    private int $integridade;

    public function __construct(
    public string $nome,
    private int $energiaMax,
    private int $integridadeMax

    ){
        if ($this->nome == ""){
            throw new InvalidArgumentException ("Insira um nome válido.");
        }

        if ($this->energiaMax <= 0){
            throw new InvalidArgumentException ("A energia máxima deve ser positiva.");
        }

        if ($this->integridadeMax <= 0){
            throw new InvalidArgumentException ("A integridade máxima deve ser positiva.");
        }


        $this->pontuacao = 0;
        $this->energia = $this->energiaMax;
        $this->integridade = $this->integridadeMax;

    }

    public function treinar(int $hrstreino): bool // Cada hora de treino contribui com 10 pontos na pontuacao e consome 2 de energia.
    {
        if ($hrstreino <= 0 || $hrstreino * 2 > $this->energia){ 
            return false;
        }

        $this->pontuacao = $this->pontuacao + $hrstreino * 10;
        $this->energia = $this->energia - $hrstreino * 2;
        return true;
    }

    public function batalhar(int $difBatalha): bool 
    {
        if ($difBatalha * 20 > $this->energia || $this->integridade == 0){
            return false;
        }

        $this->pontuacao = $this->pontuacao + $difBatalha * 70;
        $this->energia = $this->energia - $difBatalha * 20;
        $this->integridade = $this->integridade - $difBatalha * 10;
        
        if ($this->integridade < 0){
            $this->integridade = 0;
        }
        return true;

    }

    public function reparar(int $reparo): bool
    {
        if ($reparo <= 0){
            return false;
        }

        if ($reparo >= $this->integridadeMax){
            $this->integridade = $this->integridadeMax;
            return true;
        }

        $this->integridade = $this->integridade + $reparo;
        return true;
    }

    public function recarregar(int $bateria): bool
    {
        if ($bateria <= 0){
            return false;
        }

        if ($bateria >= $this->energiaMax){
            $this->energia = $this->energiaMax;
            return true;
        }

        $this->energia = $this->energia + $bateria;
        return true;

    }

    public function status(): string
    {
        return "{$this->nome} - Energia: {$this->energia}/{$this->energiaMax} | Integridade: {$this->integridade}/{$this->integridadeMax} | Pontuação de desempenho: {$this->pontuacao}";
    }


}


?>