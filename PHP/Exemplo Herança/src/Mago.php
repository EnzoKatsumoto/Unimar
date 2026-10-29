<?php

namespace App;

class Mago extends Personagem
{
    public function lancarFeitico(): string
    {
        if (!$this->gastarEnergia(35)){
            return $this->getNome() . ' Está sem energia para lançar o feitiço.';
        }
        return $this->getNome() . ' Lançou o feitiço';
    }
}