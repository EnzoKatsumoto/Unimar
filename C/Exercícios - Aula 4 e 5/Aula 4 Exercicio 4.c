#include <stdio.h>
void main(){
    int i, soma;
    i = 1;
    soma = 0;

    while (i <= 100){
        soma = soma + i;
        i++;
    }
    printf("A soma dos 100 primeiros numeros vale: %d", soma);
}
