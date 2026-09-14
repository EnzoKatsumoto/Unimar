#include <stdio.h>

void main(){
    int i, n, soma;
    soma = 0;
    i = 0;
    n = 1;
    while (n > 0){
        printf("Digite um numero: ");
        scanf("%d", &n);
        soma = soma + n;
        i++;
    }
    printf("Foram lidos %d numeros e a soma deles vale %d", i, soma);
}
