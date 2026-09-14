#include <stdio.h>
#include <locale.h>

void main(){
    setlocale(LC_ALL, "portuguese");
    float matriz[5][5], soma;
    int i, j;
    soma = 0;

    for (i=0; i<5; i++){
        for (j=0; j<5; j++){
            printf("Digite um número: ");
            scanf("%f", &matriz[i][j]);
            if (i == j){
                soma = soma + matriz[i][j];
            }
        }
    }
    printf("A soma dos elementos da diagonal principal é: %f", soma);
}
