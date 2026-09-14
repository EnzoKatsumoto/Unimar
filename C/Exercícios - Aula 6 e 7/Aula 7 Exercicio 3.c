#include <stdio.h>
#include <locale.h>

void main(){
    setlocale(LC_ALL, "portuguese");
    int matriz[5][6], i, j;
    for (i=0; i<5; i++){
        for (j=0; j<6; j++){
            printf("Digite um valor: ");
            scanf("%d", &matriz[i][j]);
        }
    }
    for (i=0; i<5; i++){
        for(j=0; j<6; j++){
            printf("\n%d", 4 * matriz[i][j]);
        }
    }
}
