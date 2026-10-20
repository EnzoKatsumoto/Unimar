// 2. Exercício 2 — Criar dois nós conectados (Fácil)

// Crie dois nós: o primeiro guarda 10 e o segundo guarda 20. Faça o primeiro apontar para o segundo e o segundo apontar para NULL.

#include <stdio.h>
#include <stdlib.h>

typedef struct elemento{
    int info;
    struct elemento *prox;
} no;

void main(){
    no *inicio;
    inicio = malloc(sizeof(no));
    inicio->info = 10;

    no *no2;
    no2 = malloc(sizeof(no));
    no2->info = 20;
    no2->prox = NULL;

    inicio->prox = no2;

    no *aux;
    aux = inicio;

    while (aux != NULL){
        printf("%d -> ",aux->info);
        aux = aux->prox;
    }
    printf("Null");
}
