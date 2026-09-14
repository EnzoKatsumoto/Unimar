<?php

namespace App;

use InvalidArgumentException;

class CarteiraDigital
{
    private float $gastoHoje;

    public function __construct(
        private string $proprietario,
        private float $saldo,
        private float $limiteDiario
    ){
        if ($this->proprietario == ""){
            throw new InvalidArgumentException("Nome de proprietário inválido.");
        }

        if ($this->saldo < 0){
            throw new InvalidArgumentException("Saldo inicial inválido.");
        }

        if ($this->limiteDiario <= 0){
            throw new InvalidArgumentException("Limite diário inválido.");
        }

        $this->gastoHoje = 0;
    }

    public function receber(float $valor): void
    {
        if ($valor <= 0){
            throw new InvalidArgumentException(
                "Não é possível receber valores menores ou iguais a zero."
            );
        }

        $this->saldo = $this->saldo + $valor;
    }

    public function pagarPix(float $valor): void
    {
        $this->validarPagamento($valor);

        $this->saldo = $this->saldo - $valor;
        $this->gastoHoje = $this->gastoHoje + $valor;
    }

    private function validarPagamento(float $valor): void
    {
        if ($valor <= 0){
            throw new InvalidArgumentException(
                "Não é possível pagar valores menores ou iguais a zero."
            );
        }

        if ($valor > $this->saldo){
            throw new InvalidArgumentException(
                "Saldo insuficiente."
            );
        }

        if ($this->gastoHoje + $valor > $this->limiteDiario){
            throw new InvalidArgumentException(
                "O valor ultrapassa o limite diário."
            );
        }
    }

    public function iniciarNovoDia(): void
    {
        $this->gastoHoje = 0;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

    public function consultarLimiteDisponivel(): float
    {
        return $this->limiteDiario - $this->gastoHoje;
    }

    public function resumo(): string
    {
        return "{$this->proprietario}: Saldo: R$"
            . number_format($this->saldo, 2, ',', '.')
            . " | Limite Diário: R$"
            . number_format($this->limiteDiario, 2, ',', '.')
            . " | Gasto Hoje: R$"
            . number_format($this->gastoHoje, 2, ',', '.')
            . " | Limite disponível: R$"
            . number_format($this->consultarLimiteDisponivel(), 2, ',', '.');
    }
}
?>