<?php

namespace App\Personagens;

abstract class Personagem
{
    private string $nome;
    private int $energia = 100;

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEnergia(): int
    {
        return $this->energia;
    }

    public function apresentar(): string
    {
        return $this->nome . ' tem ' . $this->energia . 'pontos de energia.';
    }

    abstract protected function custoAtaque(): int;
    
    abstract protected function executarAtaque(): string;

    final public function atacar(): string
    {
        $custo = $this->custoAtaque();

        if ($custo <= 0){
            throw new \LogicException('O custo do ataque deve ser positivo.');
        }
        if ($custo > $this->energia){
            return $this->nome . ' está sem energia para atacar';
        }
        $this->energia -= $custo;
        return $this->executarAtaque();
    }
}