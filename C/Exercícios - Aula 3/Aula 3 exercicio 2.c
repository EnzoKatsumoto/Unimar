#include <stdio.h>
void main(){
    float i, n, soma, media, maior, menor, m;
    printf("\n Digite um numero: "); // Adicionei a variavel m para começar o loop do segundo numero, pois se começasse do primeiro não conseguiriamos usar a lógica para comparar quem é maior ou menor.
    scanf("%f", &m);
    soma = m;
    maior = m;
    menor = m;
    for (i = 1; i <= 9; i++){   // Automaticamente o loop então deve começar do segundo número 0 -> 1 (9 números no total).
        printf("\n Digite um numero: ");
        scanf("%f", &n);
        soma = soma + n;
        if (n > maior){
            maior = n;
        }
        if (n < menor){
            menor = n;
        }
    }
    media = soma / (i + 1);
    printf("A soma dos valores vale: %.2f \n", soma);
    printf("A media dos valores vale %.2f \n", media);
    printf("O maior numero e: %.2f \n", maior);
    printf("O menor dos numeros e: %.2f", menor);
}
