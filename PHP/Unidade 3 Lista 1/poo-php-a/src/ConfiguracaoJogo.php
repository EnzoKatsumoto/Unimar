<?php

namespace App;

use InvalidArgumentException;

class ConfiguracaoJogo
{
    public function __construct(
        private int $volume,
        private string $dificuldade,
        private bool $telaCheia
    ){
        if ($this->volume < 0 || $this->volume > 100){
            throw new InvalidArgumentException(
                "O volume deve permanecer entre 0 e 100"
            );
        }

        if (
            $this->dificuldade != "facil" &&
            $this->dificuldade != "normal" &&
            $this->dificuldade != "dificil"
        ){
            throw new InvalidArgumentException(
                "Selecione uma dificuldade válida."
            );
        }
    }

    public function alterarVolume(int $valor): void
    {
        if ($valor < 0 || $valor > 100){
            throw new InvalidArgumentException(
                "Insira um volume entre 0 e 100"
            );
        }

        $this->volume = $valor;
    }

    public function alterarDificuldade(string $opcao): void
    {
        if (
            $opcao != "facil" &&
            $opcao != "normal" &&
            $opcao != "dificil"
        ){
            throw new InvalidArgumentException(
                "Selecione uma dificuldade válida"
            );
        }

        $this->dificuldade = $opcao;
    }

    public function alternarTelaCheia(): void
    {
        $this->telaCheia = !$this->telaCheia;
    }

    public function resumo(): string
    {
        if ($this->telaCheia){
            $modoTela = "Ativada";
        } else {
            $modoTela = "Desativada";
        }

        return "Volume: {$this->volume} | Dificuldade: {$this->dificuldade} | Tela Cheia: {$modoTela}";
    }
}
?>