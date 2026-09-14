#include <stdio.h>
#include <locale.h>

void main(){
    setlocale(LC_ALL, "portuguese");

    float matriz[4][3], maior;
    int i, j;

    for (i=0; i<4; i++){
        for (j=0 ; j<3; j++){
            printf("Digite um número: ");
            scanf("%f", &matriz[i][j]);

            }
        }
    maior = matriz[0][0];
    for (i=0; i<4; i++){
        for (j=0; j<3; j++){
            if (matriz[i][j] > maior){
                maior = matriz[i][j];
            }
        }
    }
    printf("O maior dos valores é: %f", maior);
}
