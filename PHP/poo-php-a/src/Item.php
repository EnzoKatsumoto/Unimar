<?php

namespace App;

use InvalidArgumentException;

class Item
{
    public function __construct(
        private string $nome,
        private float $peso
    ){}

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

}

?>