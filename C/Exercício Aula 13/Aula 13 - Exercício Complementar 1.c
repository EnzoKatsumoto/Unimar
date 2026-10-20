// 1. Exercício 1 — Criar um nó (Muito fácil)

// Declare um ponteiro para um nó, aloque memória para ele e armazene o valor 10 em info. Inicialize prox com NULL.

#include <stdlib.h>
#include <stdio.h>

typedef struct elemento{
    int info;
    struct elemento *prox;
} no;

void main(){

    no *inicio;
    inicio = malloc(sizeof(no));

    inicio->info = 10;
    inicio->prox = NULL;

    printf("%d",inicio->info);

}
