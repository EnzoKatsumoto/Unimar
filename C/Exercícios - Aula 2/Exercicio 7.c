#include <stdio.h>
void main(){
    char nome[50];
    float n1, n2, med;

    printf("Digite o nome do aluno: ");
    scanf("%s", &nome);

    printf("Digite a primeira nota de %s: ", nome);
    scanf("%f", &n1);
    printf("Digite a segunda nota de %s: ", nome);
    scanf("%f", &n2);

    med = (n1 + n2)/2;

    printf("A media de %s foi %.2f", nome, med);
}
