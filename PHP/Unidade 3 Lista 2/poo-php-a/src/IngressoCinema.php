<?php

namespace App;

use InvalidArgumentException;

class IngressoCinema
{
    public function __construct(
    public string $filme,
    private float $precoBase,
    private bool $meiaEntrada
    ){
        if ($this->precoBase < 0){
            throw new InvalidArgumentException ("O preço base deve ser maior que 0");
        }

        if ($this->filme == ""){
            throw new InvalidArgumentException ("Insira um filme válido");
        }
    }

    public function calcularValorFinal(): float
    {
        if ($this->meiaEntrada == true){
            return $this->calcularValorFInal = $this->precoBase / 2;
        }
        return $this->calcularValorFInal = $this->precoBase;
    }

    public function definirMeiaEntrada(bool $possuiDireito): void
    {
        if ($possuiDireito == true){
            $this->meiaEntrada = true;
        }
        
        $this->meiaEntrada = false;
    }

    public function resumo(): string
    {
        if ($this->meiaEntrada == true){
            return "Filme: {$this->filme} | Tipo de ingresso: Meia | Valor final: {$this->calcularValorFinal()}";
        }

        return "Filme: {$this->filme} | Tipo de ingresso: Inteira | Valor final: {$this->calcularValorFinal()}";
    }
}

?>