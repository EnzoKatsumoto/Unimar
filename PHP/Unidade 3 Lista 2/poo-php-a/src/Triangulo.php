<?php

namespace App;

use InvalidArgumentException;

class Triangulo
{
    public function __construct(
        private float $ladoA,
        private float $ladoB,
        private float $ladoC
    ){
        if ($this->ladoA <= 0 || $this->ladoB <= 0 || $this->ladoC <= 0){
            throw new InvalidArgumentException ("Um dos lados é inválido.");
        }

    }

    public function ehValido(): bool
    {
        if ($this->ladoA < $this->ladoB + $this->ladoC && $this->ladoB < $this->ladoA + $this->ladoC && $this->ladoC < $this->ladoA + $this->ladoB){
            return true;
        }

        return false;
    }

    public function classificar(): string
    {
        if ($this->ehValido() == false){
            return "Inválido";
        }

        if ($this->ladoA == $this->ladoB && $this->ladoA == $this->ladoC){
            return "Equilátero";
        }

        if ($this->ladoA == $this->ladoB || $this->ladoA == $this->ladoC || $this->ladoB == $this->ladoC){
            return "Isóceles";
        }

        return "Escaleno";
    }


    public function perimetro(): float
    {

    if ($this->ehValido() == false){
        return 0.0;
    }

    return $this->ladoA + $this->ladoB + $this->ladoC;
    
    }
}


?>