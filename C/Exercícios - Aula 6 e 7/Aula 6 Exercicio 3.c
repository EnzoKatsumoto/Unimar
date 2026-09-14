#include <stdio.h>
#include <locale.h>

void main(){
    setlocale(LC_ALL, "portuguese");
    int n[30], i, i2;
    i = 0;
    while (i<30){
        printf("Digite um número: ");
        scanf("%d", &n[i]);
        if (n[i] == 0){
            i++;
            i2 = i;
            break;
        }
        else{
            i++;
            i2 = i;
        }
    }
    for (i=0; i<i2; i++){
        printf("%d\n", n[i]);
    }
}

// REFAZER COM O DO-WHILE