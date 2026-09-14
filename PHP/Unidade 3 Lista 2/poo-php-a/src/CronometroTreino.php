<?php

namespace App;

use InvalidArgumentException;

class CronometroTreino
{
    public function __construct(
        public string $atividade,
        private int $segundosAcumulados
    ){
        if ($this->atividade == ""){
            throw new InvalidArgumentException ("Digite o nome da atividade");
        }
    }

    public function adicionarTempo(int $segundos): void
    {
        if ($segundos < 0){
            throw new InvalidArgumentException ("Só é possível adicionar tempo positivo");
        }

        $this->segundosAcumulados = $this->segundosAcumulados + $segundos;
    }

    public function zerar(): void
    {
        $this->segundosAcumulados = 0;
    }

    public function totalMinutos(): float
    {
        return $this->segundosAcumulados / 60;
    }

    public function formatarTempo(): string
    {
        $horas = intdiv($this->segundosAcumulados, 3600);
        $minutos = intdiv($this->segundosAcumulados % 3600, 60);
        $segundos = $this->segundosAcumulados % 60;

        return sprintf ("%02d:%02d:%02d", $horas, $minutos, $segundos);
    
    }

}

?>