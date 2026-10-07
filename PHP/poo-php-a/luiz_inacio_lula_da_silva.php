<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Mochila;
use App\Item;

$mochila = new Mochila();
$item1 = new Item("Flávio Bolsonaro", 82);
$item2 = new Item ("Garrafa", 1);

$mochila->adicionarItem($item1);
$mochila->adicionarItem($item2);

$mochila->listarItens();

?>