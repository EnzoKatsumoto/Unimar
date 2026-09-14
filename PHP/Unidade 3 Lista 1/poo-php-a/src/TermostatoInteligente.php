<?php
namespace App;

use InvalidArgumentException;

Class TermostatoInteligente
{
    public function __construct(
        private float $temperaturaAtual,
        private float $temperaturaAlvo,
        private bool $ligado
    ){
        if ($this->temperaturaAlvo < 16 || $this->temperaturaAlvo > 30){
            throw new InvalidArgumentException ("A temperatura alvo deve estar entre 16°C e 30°C");
        }
    }

    public function ligar(): void
    {
        $this->ligado = TRUE;
    }

    public function desligar(): void
    {
        $this->ligado = FALSE;
    }

    public function definirTemperaturaAlvo(float $temperatura): void
    {
        if ($temperatura < 16 || $temperatura > 30){
            throw new InvalidArgumentException ("A temperatura alvo deve estar entre 16°C e 30°C");
        }
        $this->temperaturaAlvo = $temperatura;
    }

    public function atualizarTemperaturaAtual(float $temperatura): void
    {
        $this->temperaturaAtual = $temperatura;
    }

    public function acaoNecessaria(): string
    {
        if ($this->ligado == FALSE){
            return "DESLIGADO";
        }
        
        if ($this->temperaturaAtual < $this->temperaturaAlvo){
            return "Aquecer";
        }
        if ($this->temperaturaAtual > $this->temperaturaAlvo){
            return "Resfriar";
        }
        return "Manter";
    }


}



?>