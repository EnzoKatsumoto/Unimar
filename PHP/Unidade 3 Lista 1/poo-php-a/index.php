<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Pessoa;
use App\Retangulo;
use App\ContaBancaria;
use App\Aluno;
use App\ProdutoEstoque;
use App\TermostatoInteligente;
use App\PersonagemRPG;
use App\PetVirtual;
use App\CarteiraDigital;
use App\ConfiguracaoJogo;
use App\DroneEntrega;

/*

# cria um novo objeto a partir da Classe Pessoa
$pessoa = new Pessoa('Valdir', 30);
echo $pessoa->apresentar() . PHP_EOL;

$pessoa2 = new Pessoa('João', 22);
echo $pessoa2->apresentar() . PHP_EOL;


#Exercicio 1 - Retangulo
$retangulo = new Retangulo(10,5);
echo $retangulo->area() . PHP_EOL;
echo $retangulo->perimetro() . PHP_EOL;



#Exercicio 2 - Conta Bancária

$conta1 = new ContaBancaria("Enzo", 100);
$conta2 = new ContaBancaria("Pedro", 5000);
echo $conta1->resumo() . PHP_EOL;
echo $conta2->resumo() . PHP_EOL;
$conta1->depositar(27);
echo $conta1->resumo() . PHP_EOL;
$conta2->sacar(300);
echo $conta2->resumo() . PHP_EOL;
$conta1->sacar(150);
echo $conta1->resumo(). PHP_EOL;
$conta2->depositar(-900);
echo $conta2->resumo();



#Exercicio 3 - Aluno

$aluno1 = new Aluno("Enzo", "200498");
$aluno1->adicionarNota(7);
$aluno1->adicionarNota(8);
$aluno1->adicionarNota(10);

$aluno2 = new Aluno("Lucas", "093812");
$aluno2->adicionarNota(5);
$aluno2->adicionarNota(6);
$aluno2->adicionarNota(4);

$aluno3 = new Aluno("Maria", "100293");
$aluno3->adicionarNota(2);
$aluno3->adicionarNota(2);
$aluno3->adicionarNota(1);

echo $aluno1->resumo() . PHP_EOL;
echo $aluno2->resumo() . PHP_EOL;
echo $aluno3->resumo();



#Exercicio 4 - ProdutoEstoque

$produto1 = new ProdutoEstoque("Vassoura", 10.49, 20);
$produto2 = new ProdutoEstoque("Cesto de Lixo", 29.99, 14);
echo $produto1->resumo() . PHP_EOL;
echo $produto2->resumo() . PHP_EOL;

$produto1->aplicarDesconto(10);
$produto2->repor(10);
$produto1->reservar(5);

echo $produto1->resumo() . PHP_EOL ;
echo $produto2->resumo() . PHP_EOL;

$produto1->aplicarDesconto(60);
$produto2->reservar(40);



#Exercicio 5 - Termostato Inteligente

$termostato1 = new TermostatoInteligente(20, 25, TRUE);
$termostato1->desligar();
echo $termostato1->acaoNecessaria() . PHP_EOL;
$termostato1->ligar();
echo $termostato1->acaoNecessaria() . PHP_EOL;
$termostato1->definirTemperaturaAlvo(16);
echo $termostato1->acaoNecessaria() . PHP_EOL;
$termostato1->atualizarTemperaturaAtual(16);
echo $termostato1->acaoNecessaria() . PHP_EOL;

$termostato1->definirTemperaturaAlvo(0);



$personagem1 = new PersonagemRPG("Guerreiro", 100);
$personagem2 = new PersonagemRPG("Mago", 70);

echo $personagem1->status() . PHP_EOL;
echo $personagem2->status() . PHP_EOL;

$personagem1->sofrerDano(20);
echo $personagem1->status() . PHP_EOL;
$personagem1->curar(10);
echo $personagem1->status() . PHP_EOL;

$personagem2->executarAtaque(35, 60);
echo $personagem2->status() . PHP_EOL;
$personagem2->descansar(20);
echo $personagem2->status() . PHP_EOL;

$personagem2->executarAtaque(90, 200);
$personagem1->curar(30);
echo $personagem1->status() . PHP_EOL;

$personagem1->sofrerDano(120);
echo $personagem1->status() . PHP_EOL;

$personagem1->executarAtaque(10, 20);
echo $personagem1->status();




#Exercicio 7 Pet Virtual

$pet1 = new Petvirtual("Carlos");
echo $pet1->status() . PHP_EOL;
$pet1->brincar(40);
echo $pet1->status() . PHP_EOL;
$pet1->alimentar(20);
echo $pet1->status() . PHP_EOL;
$pet1->dormir(30);
echo $pet1->status() . PHP_EOL;
$pet1->brincar(60);
echo $pet1->status() . PHP_EOL;
$pet1->dormir(25);
echo $pet1->status() . PHP_EOL;
$pet1->alimentar(30);
echo $pet1->status() . PHP_EOL;
$pet1->brincar(70);
echo $pet1->status();



#Exercicio 8 Carteira Digital

$conta1 = new CarteiraDigital("Enzo", 1000.00, 1000.00);
echo $conta1->resumo() . PHP_EOL;
$conta1->receber(300);
echo $conta1->resumo() . PHP_EOL;
$conta1->pagarPix(100);
echo $conta1->consultarLimiteDisponivel() . PHP_EOL;
$conta1->iniciarNovoDia();
$conta1->pagarPix(1000);
$conta1->iniciarNovoDia();
$conta1->pagarPix(2000);
echo $conta1->resumo();




#Exercicio 9 Configuração de jogo

$original = new ConfiguracaoJogo(50, "normal", false);
echo $original->resumo() . PHP_EOL;
$atalho = $original;

$atalho->alterarVolume(80);
$atalho->alterarDificuldade("dificil");
$atalho->alternarTelaCheia();

$original->resumo() . PHP_EOL;
$atalho->resumo() . PHP_EOL;

if ($original === $atalho) {
    echo "TRUE" . PHP_EOL;
} else {
    echo "FALSE" . PHP_EOL;
}


$copia = clone $original;

$copia->alterarVolume(20);
$copia->alterarDificuldade("facil");
$copia->alternarTelaCheia();

*/

#Exercicio 10 Drone de Entrega

$drone1 = new DroneEntrega(67067, 42);
$drone1->carregarPacote(25);
$drone1->decolar(5);
echo $drone1->status() . PHP_EOL;
$drone1->finalizarEntrega();
echo $drone1->status() . PHP_EOL;
$drone1->recarregar();
echo $drone1->status() . PHP_EOL;

/*
$drone1->carregarPacote(60);
$drone1->decolar(2);
$drone1->carregarPacote(20);
$drone1->decolar(300);
*/

$drone2 = new DroneEntrega(42042, 67);
echo $drone1->status() . PHP_EOL;
echo $drone2->status();