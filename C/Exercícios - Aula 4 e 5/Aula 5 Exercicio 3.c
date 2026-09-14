#include <stdio.h>
#include <stdlib.h>

void main(){
    int opcao;
    float a, b, c, maior, l;
    int x, fat;
    do {
        printf("Selecione a opcao desejada: \n");
        printf("(1) Somar dois valores reais\n");
        printf("(2) Encontrar o maior entre 3 numeros\n");
        printf("(3) Calcular o fatorial de X\n");
        printf("(4) Calcular o valor de a elevado a b\n");
        scanf("%d", &opcao);
        switch (opcao){
            case 1: printf("Digite dois valores para somar: ");
            scanf("%f%f", &a, &b);
            printf("\nA soma vale %.2f\n", a + b);
            break;
            case 2:
            printf("Digite o primeiro valor: ");
            scanf("%f", &a);
            maior = a;
            printf("\nDigite o segundo valor: ");
            scanf("%f", &b);
            if (b > maior){
                maior = b;
            printf("\nDigite o terceiro valor: ");
            scanf("%f", &c);
            if (c > maior){
                maior = c;
            }
            printf("O maior valor entre os tres e %.2f\n", maior);
            break;

            }
            case 3:
            printf("Digite o numero que quer calcular o fatorial: ");
            scanf("%d", &x);
            int z;
            z = x;
            fat = 1;
            while (x >= 1){
                fat = fat * x;
                x--;
            }
            printf("O valor de %d fatorial e %d\n", z, fat);
            break;
            case 4:
                printf("Digite o valor de a: ");
                scanf("%f", &a);
                printf("Digite o valor de b: ");
                scanf("%f", &b);
                float resultado;
                resultado = 1;
                l = b;
                while (b >= 1){
                    resultado = resultado * a;
                    b--;
                }
                printf("O valor de %.2f elevado a %.2f e %.2f\n", a, l, resultado);
                break;
            }
            system("pause");
            system("cls");


        } while (opcao != 0);

}
