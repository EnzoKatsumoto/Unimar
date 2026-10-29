<?php

namespace App;

class Guerreiro extends Personagem
{
    public function atacar(): string
    {
        if (!$this->gastarEnergia(27)) {
            return $this->getNome() . ' está sem energia para atacar.';
        }

        return $this->getNome() . ' Atacou com a espada!';
    }
}