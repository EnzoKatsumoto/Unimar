#include <stdio.h>
void main(){
    float l, p, S;
    printf("Digite o valor do lado do quadrado: ");
    scanf("%f", &l);

    p = 4 * l;
    S = l * l;

    printf("O perimetro do quadrado mede %.2f enquanto sua area mede %.2f", p, S);
}
