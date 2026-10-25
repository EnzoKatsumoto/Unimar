<?php

namespace App;

use InvalidArgumentException;

class Astronauta
{
    private int $vida;
    private int $energia;
    private int $oxigenio;
    private int $cargasCilindro;

    public function __construct(
        private string $nome,
        private int $vidaMaxima,
        private int $energiaMaxima,
        private int $oxigenioMaximo,
        int $cargasCilindro
    ){
        if ($this->nome == ""){
            throw new InvalidArgumentException("O nome não pode estar vazio.");
        }

        if ($this->vidaMaxima <= 0){
            throw new InvalidArgumentException("A vida máxima deve ser maior que zero.");
        }

        if ($this->energiaMaxima <= 0){
            throw new InvalidArgumentException("A energia máxima deve ser maior que zero.");
        }

        if ($this->oxigenioMaximo <= 0){
            throw new InvalidArgumentException("O oxigênio máximo deve ser maior que zero.");
        }

        if ($cargasCilindro < 0){
            throw new InvalidArgumentException("A quantidade de cargas não pode ser negativa.");
        }

        $this->vida = $this->vidaMaxima;
        $this->energia = $this->energiaMaxima;
        $this->oxigenio = $this->oxigenioMaximo;
        $this->cargasCilindro = $cargasCilindro;
    }

    public function explorar(int $energiaGasta, int $oxigenioGasto): void
    {
        if ($energiaGasta <= 0 || $oxigenioGasto <= 0){
            throw new InvalidArgumentException("Os gastos devem ser maiores que zero.");
        }

        if ($this->vida == 0){
            throw new InvalidArgumentException("O astronauta está sem vida e não pode explorar.");
        }

        if ($this->oxigenio == 0){
            throw new InvalidArgumentException("O astronauta está sem oxigênio e não pode explorar.");
        }

        if ($energiaGasta > $this->energia){
            throw new InvalidArgumentException("Energia insuficiente para explorar.");
        }

        if ($oxigenioGasto > $this->oxigenio){
            throw new InvalidArgumentException("Oxigênio insuficiente para explorar.");
        }

        $this->energia -= $energiaGasta;
        $this->oxigenio -= $oxigenioGasto;
    }

    public function descansar(int $energiaRecuperada): void
    {
        if ($energiaRecuperada <= 0){
            throw new InvalidArgumentException("A energia recuperada deve ser maior que zero.");
        }

        $this->energia += $energiaRecuperada;

        if ($this->energia > $this->energiaMaxima){
            $this->energia = $this->energiaMaxima;
        }
    }

    public function usarCilindro(int $oxigenioRecuperado): void
    {
        if ($oxigenioRecuperado <= 0){
            throw new InvalidArgumentException("A recuperação de oxigênio deve ser maior que zero.");
        }

        if ($this->cargasCilindro == 0){
            throw new InvalidArgumentException("Não existem cargas de cilindro disponíveis.");
        }

        $this->oxigenio += $oxigenioRecuperado;
        $this->cargasCilindro--;

        if ($this->oxigenio > $this->oxigenioMaximo){
            $this->oxigenio = $this->oxigenioMaximo;
        }
    }

    public function alimentar(int $vidaRecuperada): void
    {
        if ($vidaRecuperada <= 0){
            throw new InvalidArgumentException("A vida recuperada deve ser maior que zero.");
        }

        $this->vida += $vidaRecuperada;

        if ($this->vida > $this->vidaMaxima){
            $this->vida = $this->vidaMaxima;
        }
    }

    public function sofrerDano(int $dano): void
    {
        if ($dano <= 0){
            throw new InvalidArgumentException("O dano deve ser maior que zero.");
        }

        $this->vida -= $dano;

        if ($this->vida < 0){
            $this->vida = 0;
        }
    }

    public function resumo(): string
    {
        return $this->nome .
        " - Vida: " . $this->vida . "/" . $this->vidaMaxima .
        " | Energia: " . $this->energia . "/" . $this->energiaMaxima .
        " | Oxigênio: " . $this->oxigenio . "/" . $this->oxigenioMaximo .
        " | Cargas do cilindro: " . $this->cargasCilindro;
    }
}