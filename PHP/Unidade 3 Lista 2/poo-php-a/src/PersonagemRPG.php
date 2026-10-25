<?php

namespace App;

use InvalidArgumentException;

class PersonagemRPG

{
    private int $vida;
    private int $energia;

    public function __construct(
    public string $nome,
    public string $classe,
    ){
        $this->vida = 100;
        $this->energia = 100;
    }

    public function receberDano(int $pontos): bool
    {
        if ($pontos < 0){
            return false;
        }

        if ($this->vida - $pontos <= 0){
            $this->vida = 0;
            return true;
        }

        $this->vida = $this->vida - $pontos;
        return true;
    }

    public function curar(int $pontos): bool
    {
        if ($pontos < 0){
            return false;
        }

        if ($this->vida + $pontos >= 100){
            $this->vida = 100;
            return true;
        }

        $this->vida = $this->vida + $pontos;
        return true;
    }

    public function usarHabilidade(int $custoEnergia): bool
    {
        if ($custoEnergia <= 0){
            return false;
        }

        if ($custoEnergia > $this->energia){
            return false;
        }

        $this->energia = $this->energia - $custoEnergia;
        return true;
    }

    public function descansar(int $pontos): bool
    {
        if ($pontos <= 0){
            return false;
        }

        if ($this->energia + $pontos > 100){
            $this->energia = 100;
            return true;
        }

        $this->energia = $this->energia + $pontos;
        return true;
    }

    public function status(): string
    {
        return "{$this->nome} - {$this->classe} : Vida: {$this->vida}/100 | Energia: {$this->energia}/100";
    }
}


?>