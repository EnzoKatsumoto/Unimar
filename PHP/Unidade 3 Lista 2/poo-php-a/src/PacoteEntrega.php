<?php

namespace App;

use InvalidArgumentException;

class PacoteEntrega
{
    private int $tentativas;
    private string $status;

    public function __construct(
    public string $codigo,
    public string $destino
    ){
        $this->status = "Aguardando";
        $this->tentativas = 0;

        if ($this->codigo == ""){
            throw new InvalidArgumentException("Insira um código válido.");

        }

        if ($this->destino == ""){
            throw new InvalidArgumentException("Insira um destino válido.");

        }

    }

    public function sairParaEntrega(): bool
    {
        if ($this->status = "Aguardando"){
            $this->status = "Em rota";
            $this->tentativas = $this->tentativas + 1;
            
            return true;
        }

        return false;
    }

    public function registrarFalha(): bool
    {
        if ($this->status = "Em rota" && $this->tentativas < 3){
            $this->status = "Aguardando";
            return true;
        }
        if ($this->status = "Em rota" && $this->tentativas == 3){
            $this->status = "Devolução";
            return true;
        }

        return false;
    }

    public function confirmarEntrega(): bool
    {
        if ($this->status = "Em rota"){
            $this->status = "Entregue";
            return true;
        }

        return false;
    }

    public function statusAtual(): string
    {
        return "Status: {$this->status} | Tentativas: {$this->tentativas}";
    }



}