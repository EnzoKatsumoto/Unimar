<?php
namespace App;

use InvalidArgumentException;

#sem property promotion

/*
class Retangulo
{
    private float $largura;
    private float $altura;

    public function __construct(float $largura, float $altura) {

        $this->largura = $largura;
        $this->altura = $altura;
    }
}

*/


#com property promotion
class Retangulo
{
    public function __construct(
        private float $largura,
        private float $altura
    )
    {
        if ($this->largura <= 0){
            throw new InvalidArgumentException ("A largura deve ser maior que 0");
        }

        if ($this->altura <= 0){
            throw new InvalidArgumentException ("A altura deve ser maior que 0");
        }
    }

    public function area(): float
    {
        return $this->altura * $this->largura;
    }

    public function perimetro(): float
    {
        return 2 * ($this->largura + $this->altura);
    }

    public function ehQuadrado(): bool
    {
        if ($this->altura == $this->largura){
            return true;
        }
        return false;
    }
    
}


?>