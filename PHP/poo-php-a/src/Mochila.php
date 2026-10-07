<?php

namespace App;

use InvalidArgumentException;

class Mochila
{
    private array $itens = [];

    public function adicionarItem(Item $item): void
    {
        $this->itens[] = $item; // add no fim da lista.
    }

    public function listarItens(): void
    {
        foreach ($this->itens as $item){
            echo $item->getNome() . " " . $item->getPeso() . "KG" . PHP_EOL;
        }
    }
}

?>