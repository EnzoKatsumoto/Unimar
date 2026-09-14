<?php

namespace App;

use InvalidArgumentException;

class PersonagemRPG
{
    private int $vidaAtual;
    private int $energia;

    public function __construct(
        private string $nome,
        private int $vidaMaxima
    ){
        if ($this->nome == ""){
            throw new InvalidArgumentException("Digite um nome para o personagem");
        }

        if ($this->vidaMaxima <= 0){
            throw new InvalidArgumentException("A vida máxima deve ser maior que 0");
        }

        
        $this->vidaAtual = $this->vidaMaxima;
        $this->energia = 100;
    }

    public function sofrerDano(int $dano): void
    {
        if ($dano < 0){
            throw new InvalidArgumentException("Não é possível causar dano negativo");
        }

        if ($dano >= $this->vidaAtual){
            $this->vidaAtual = 0;
            return;
        }

        $this->vidaAtual = $this->vidaAtual - $dano;
    }

    public function curar(int $pontos): void
    {
        if ($pontos < 0){
            throw new InvalidArgumentException("Não é possível curar pontos negativos de vida");
        }

        if ($this->vidaAtual + $pontos > $this->vidaMaxima){
            $this->vidaAtual = $this->vidaMaxima;
            return;
        }

        $this->vidaAtual = $this->vidaAtual + $pontos;
    }

    public function executarAtaque(int $custoEnergia, int $danoBase): int
    {
        
        if ($this->vidaAtual == 0){
            return 0;
        }

        
        if ($this->energia < $custoEnergia){
            return 0;
        }

        $this->energia = $this->energia - $custoEnergia;

        return $danoBase;
    }

    public function descansar(int $x): void
    {
        $this->energia = $this->energia + $x;

        
        if ($this->energia > 100){
            $this->energia = 100;
        }
    }

    public function estaVivo(): bool
    {
        if ($this->vidaAtual > 0){
            return true;
        }

        return false;
    }

    public function status(): string
    {
        if ($this->estaVivo()){
            $situacao = "Vivo";
        }
        else {
            $situacao = "Derrotado";
        }

        return "{$this->nome} | Vida: {$this->vidaAtual}/{$this->vidaMaxima} | Energia: {$this->energia} | Status: {$situacao}";
    }
}
?>