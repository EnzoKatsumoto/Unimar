<?php
namespace App;

use InvalidArgumentException;

class Retangulo
{
    public function __construct(
        private float $largura,
        private float $altura
    ){
        if ($largura <= 0) {
            throw new InvalidArgumentException("Largura inválida");
        }

        if ($altura <= 0) {
            throw new InvalidArgumentException("Altura inválida");
        }
    }
    
    public function area():float
    {
        $area = $this->largura * $this->altura;
        return $area;
    }

    public function perimetro(): float
    {
        return 2 * ($this->largura + $this->altura);
    }

    public function ehQuadrado(): bool
    {
        return $this->largura == $this->altura;
    }

    public function redimensionar(float $largura, float $altura): void
    {
        if ($largura <= 0) {
            throw new InvalidArgumentException("Largura inválida");
        }
        if ($altura <= 0) {
            throw new InvalidArgumentException("Altura inválida");
        }
    }
}