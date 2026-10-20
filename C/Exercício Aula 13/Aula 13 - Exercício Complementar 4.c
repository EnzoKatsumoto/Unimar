//4. Exercício 4 — Inserir no início (Fácil a médio)

// Implemente no *insere_inicio(no *inicio, int valor), que cria um nó, coloca valor nele e o insere antes do primeiro nó existente.


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

    inicio = insere_inicio(inicio, 5);

    aux = inicio;


    while (aux != NULL){
        printf("%d -> ", aux->info);
        aux = aux->prox;
    }
    printf("NULL");
}
