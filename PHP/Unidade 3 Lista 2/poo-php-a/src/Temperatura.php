<?php

namespace App;

use InvalidArgumentException;

class Temperatura
{
    public function __construct(
        private float $celsius
    ) {
        if ($this->celsius < -273.15) {
            throw new InvalidArgumentException(
                "Você digitou uma temperatura menor que o zero absoluto"
            );
        }
    }

    public function alterar(float $novoValor): bool
    {
        if ($novoValor < -273.15) {
            return false;
        }

        $this->celsius = $novoValor;

        return true;
    }

    public function emFahrenheit(): float
    {
        return ($this->celsius * 9 / 5) + 32;
    }

    public function emKelvin(): float
    {
        return $this->celsius + 273.15;
    }

    public function descricao(): string
    {
        return "{$this->celsius}°C" . PHP_EOL
            . $this->emFahrenheit() . "°F" . PHP_EOL
            . $this->emKelvin() . "K";
    }
}
