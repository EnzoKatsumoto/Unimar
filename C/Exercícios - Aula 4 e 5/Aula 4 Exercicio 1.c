#include <stdio.h>
#include <conio.h>
void main(){
    int n, i;
    char a;
    i = 1;
    printf("Digite o numero de caracteres que serao lidos:");
    scanf("%d", &n);

    while (i <= n){
        printf("\nDigite um caracter: ");
        getche();
        i++;
    }

}
