#include <stdio.h>
void main(){
    int a, soma;
    a = 1;
    soma = 0;
    while (a <= 7){
        soma = soma + 3*(a*a) + a - 2;
        a++;
    }
    printf("%d", soma);
}
