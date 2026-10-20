// Exercício 5 — Inserir no final (Médio)

// Implemente no *insere_final(no *inicio, int valor). Se a lista estiver vazia, o novo nó será o início. Caso contrário, percorra até o último nó e conecte o novo.


#include <stdio.h>
#include <stdlib.h>

typedef struct elemento{
    int info;
    struct elemento *prox;

} no;

no *insere_inicio (no *inicio, int valor){
    no *novo;
    novo = malloc(sizeof(no));
    novo->info = valor;
    novo->prox = inicio;

    return novo;

}

no *insere_final(no *inicio, int valor) {
    no *novo, *auxiliar;
    auxiliar = inicio;

    if (inicio == NULL){
        novo = malloc(sizeof(no));
        novo->info = valor;
        novo->prox = NULL;

        return novo;
    }

    while (auxiliar->prox != NULL){
        auxiliar = auxiliar->prox;
    }
    novo = malloc(sizeof(no));
    novo->info = valor;
    auxiliar->prox = novo;
    novo->prox = NULL;

    return inicio;
}

void main(){

    no *inicio, *no2, *no3, *aux, *fim;

    no3 = malloc(sizeof(no));
    no3->info = 30;
    no3->prox = NULL;

    no2 = malloc(sizeof(no));
    no2->info = 20;
    no2->prox = no3;

    inicio = malloc(sizeof(no));
    inicio->info = 10;
    inicio->prox = no2;

    inicio = insere_inicio(inicio, 5);

    fim = insere_final(inicio, 40);

    aux = inicio;


    while (aux != NULL){
        printf("%d -> ", aux->info);
        aux = aux->prox;
    }
    printf("NULL");
}
