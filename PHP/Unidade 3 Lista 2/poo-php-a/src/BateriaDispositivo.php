<?php

namespace App;

use InvalidArgumentException;

class BateriaDispositivo
{
    public function __construct(
    public string $dispositivo,
    private int $carga
    ){
        if ($this->dispositivo == ""){
            throw new InvalidArgumentException ("Insira um nome válido ao dispositivo.");
        }

    }

    public function usar(int $minutos): bool
    {
        if ($minutos <= 0){
            throw new InvalidArgumentException ("O tempo de utilização deve ser positivo.");
        }

        if ($this->carga < $minutos/5){
            $this->carga = 0;
            return false;
        }

        $this->carga = $this->carga - $minutos/5;
        return true;
    }

    public function carregar(int $percentual): int
    {
        if ($percentual <= 0){
            throw new InvalidArgumentException ("A carga deve ser positiva");
        }

        if ($this->carga + $percentual > 100){
            $adicionado = 100 - $this->carga;
            $this->carga = 100;
            return $adicionado;
        }

        $this->carga = $this->carga + $percentual;
        return $percentual;

    }

    public function nivel(): int
    {
        return $this->carga;
    }

    public function estaCritica(): bool
    {
        if ($this->carga <= 15){
            return true;
        }

        return false;
    }

    public function status(): string
    {
        return "Dispositivo: {$this->dispositivo} | Nível: {$this->carga}%";
    }
}

?>