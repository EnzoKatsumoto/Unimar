// 3. Exercício 3 — Percorrer uma lista (Fácil)

// Considere que inicio aponta para uma lista com os valores 10, 20 e 30. Escreva um while que imprima todos os valores.

#include <stdio.h>
#include <stdlib.h>

typedef struct elemento{
    int info;
    struct elemento *prox;

} no;

void main(){

    no *inicio, *no2, *no3, *aux;

    no3 = malloc(sizeof(no));
    no3->info = 30;
    no3->prox = NULL;

    no2 = malloc(sizeof(no));
    no2->info = 20;
    no2->prox = no3;

    inicio = malloc(sizeof(no));
    inicio->info = 10;
    inicio->prox = no2;

    aux = inicio;

    while (aux != NULL){
        printf("%d -> ", aux->info);
        aux = aux->prox;
    }
    printf("NULL");
}
