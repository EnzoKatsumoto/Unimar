<?php

namespace App;

use InvalidArgumentException;

Class Aluno
{
    private array $notas = [];

    public function __construct(
        private string $nome,
        private string $RA,
        
    ){
        if ($nome == ""){
            throw new InvalidArgumentException("Digite um nome válido");
        }
        if ($RA == ""){
            throw new InvalidArgumentException("Digite um RA válido");
        }
    }
    public function adicionarNota(float $nota): void
    {
        if ($nota < 0 || $nota > 10){
        throw new InvalidArgumentException("Digite uma nota válida");
        }
        $this->notas[] = $nota;
    }
    public function calcularMedia(): float
    {
        if (count($this->notas) == 0){
            return 0.0;
        }
        return array_sum($this->notas) / count($this->notas);
    }
    public function situacao(): string
    {
        if ($this->calcularMedia() >= 7){
            return "Aprovado";
        }
        if ($this->calcularMedia() >= 5){
            return "Recuperação";
        }
            return "Reprovado";
    }
    public function resumo(): string
    {
        return "Aluno: {$this->nome} | RA: {$this->RA} | Média: " . $this->calcularMedia() . " | Situação: " . $this->situacao();
    }
}
?>