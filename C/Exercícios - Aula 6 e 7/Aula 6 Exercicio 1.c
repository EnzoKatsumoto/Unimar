#include <stdio.h>
#include <locale.h>

void main(){
    setlocale(LC_ALL, "portuguese");

    int n[10], i, soma;

    for (i=0; i<10; i++){
        printf("\nDigite um número: ");
        scanf("%d", &n[i]);
        soma = soma + n[i];
    }
    printf("A soma dos valores é: %d", soma);

}

