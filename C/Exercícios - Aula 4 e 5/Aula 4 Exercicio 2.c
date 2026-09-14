#include <stdio.h>

void main(){
    int n, i;
    float lado, S;
    i = 1;
    S = 0;
    printf("Digite o numero de lados do poligono: ");

    scanf("%d", &n);
    if (n <= 2){
        printf("Nao e possivel formar um poligono com %d lados", n);
    }
    else {
       while (i <= n){
        printf("\nDigite a medida do %d lado: ", i);
        scanf("%f", &lado);
        S = S + lado;
        i++;
    }

    }
    printf("O perimetro do poligono mede %.2f", S);
}
