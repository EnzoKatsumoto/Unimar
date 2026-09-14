#include <stdio.h>
void main() {

    float b, h, S;

    printf("Digite o tamanho da base do triangulo: ");
    scanf("%f", &b);

    printf("Digite o tamanho da altura do triangulo: ");
    scanf("%f", &h);

    S = b * h/2;

    printf("A area total do triangulo vale: %.2f", S);

}
