#include <stdio.h>
void main(){
    float a, b, c;
    printf("Digite um valor para a: ");
    scanf("%f", &a);
    printf("Digite um valor para b: ");
    scanf("%f", &b);
    c = a;
    a = b;
    b = c;

    printf("O valor de a agora e %.1f", a);
    printf(" O valor de b agora e %.1f", b);


}
