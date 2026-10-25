<?php

namespace App;

use InvalidArgumentException;

class SmartLocker

{
    private string $estado;
    private int $tentativas;
    private int $identificacaoEncomenda;
    private int $codRetirada;

    public function __construct(){
    $this->estado = "livre";
    $this->tentativas = 0;
    $this->identificacaoEncomenda = 0;
    $this->codRetirada = 0;

    }


    public function receberEncomenda(): bool
    {
        if ($this->estado != "livre"){
            throw new InvalidArgumentException ("O armário já está ocupado.");
            return false;

        }

        $this->identificacaoEncomenda = $this->identificacaoEncomenda + 1;
        $this->codRetirada = $this->identificacaoEncomenda * 2;
        $this->estado = "ocupado";

        return true;

    }

    public function retirada(int $codigo): bool{
        if ($codigo == $this->codRetirada && $this->tentativas < 4){
            $this->tentativas = 0;
            $this->estado = "livre";

            return true;
        }

        $this->tentativas = $this->tentativas + 1;


        if ($this->tentativas == 3){
            $this->estado = "bloqueado";

        }

        return false;
        
    }

    public function desbloquear(): bool{
        if ($this->estado != "bloqueado"){
            return false;
        }

        $this->estado = "ocupado";
        $this->tentativas = 0;

        return true;
    }

    public function status(): string{
        return "Encomenda - Identificação: {$this->identificacaoEncomenda} | Código de retirada: {$this->codRetirada} | Tentativas: {$this->tentativas} | Estado: {$this->estado}";
    }
}


?>