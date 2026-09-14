#include <stdio.h>
#include <locale.h>

void main(){
    setlocale(LC_ALL, "portuguese");
    int i;
    float n[5];

    for (i=0; i<5; i++){
        printf("\nDigite um número: ");
        scanf("%f", &n[i]);
    }
    for (i=4; i>=0; i--){
        printf("%.2f\n", n[i]);
    }
}
