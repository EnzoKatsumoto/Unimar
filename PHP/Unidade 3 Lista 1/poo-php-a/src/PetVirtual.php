<?php

namespace App;

use InvalidArgumentException;

class Petvirtual
{
    private int $fome;
    private int $energia;
    private int $felicidade;

    public function __construct(
        private string $nome,
        
    ){
        if ($this->nome == ""){
            throw new InvalidArgumentException("O pet deve ter um nome válido");
        }

        $this->fome = 100;
        $this->energia = 100;
        $this->felicidade = 100;
    }

    public function alimentar(int $comida): void
    {
        
        $this->fome = $this->limitar($this->fome + 2 * $comida);
        $this->energia = $this->limitar($this->energia - $comida);
    }
    

    public function brincar(int $brincadeira): void
    {
        $this->felicidade = $this->limitar($this->felicidade + 2 * $brincadeira);
        $this->energia = $this->limitar($this->energia - $brincadeira);
        $this->fome = $this->limitar($this->fome - $brincadeira);
        
    }

    public function dormir(int $sono): void
    {
        $this->energia = $this->limitar($this->energia + 2 * $sono);
        $this->felicidade = $this->limitar($this->felicidade - $sono);

    }

    private function limitar(int $valor): int
    {
        if ($valor < 0){
            return 0;
        }

        if ($valor > 100){
            return 100;
        }
        return $valor;
    }

    public function status(): string
    {
        return "{$this->nome}: FOME: {$this->fome}/100 | FELICIDADE: {$this->felicidade}/100 | ENERGIA: {$this->energia}/100";
    }
}

?>