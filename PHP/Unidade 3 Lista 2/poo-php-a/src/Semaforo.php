<?php

namespace App;

use InvalidArgumentException;

class Semaforo
{
    private string $cor;
    private int $ciclosCompletos;

    public function __construct(
    public string $local
    ){
        $this->cor = "vermelho";
        $this->ciclosCompletos = 0;
    }

    public function avancar(): void
    {
        if ($this->cor == "vermelho"){
            $this->cor = "verde";
            
        }

        elseif ($this->cor == "verde"){
            $this->cor = "amarelo";
        }

        elseif ($this->cor == "amarelo"){
            $this->cor = "vermelho";
            $this->ciclosCompletos = $this->ciclosCompletos + 1;
        }

    }

    public function podePassar(): bool{
        if ($this->cor == "verde"){
            return true;
        }

        return false;
    }

    public function estado(): string
    {
        return "Local: {$this->local} | Cor Atual: {$this->cor} | Quantidade de ciclos: {$this->ciclosCompletos}";
    }
}


?>