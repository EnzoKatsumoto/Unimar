#include <stdio.h>
void main() {

    float a, b, c, x;
    printf("Digite um valor para a: ");
    scanf("%f", &a);
    printf("Digite um valor para b: ");
    scanf("%f", &b);
    printf("Digite um valor para c: ");
    scanf("%f", &c);

    x = 2*a*b + 3*a*c - 4*b*c;

    printf("O valor de x e: %.2f ", x);

}
