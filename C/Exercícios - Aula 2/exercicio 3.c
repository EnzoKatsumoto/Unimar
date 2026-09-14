#include <stdio.h>
void main(){
    float valor_original, desconto, valor_final;
    printf("Digite o valor original do produto: ");
    scanf("%f", &valor_original);

    printf("Informe a porcentagem de desconto que o produto esta: ");
    scanf("%f", &desconto);

    valor_final = valor_original - valor_original * (desconto/100);

    printf("O valor final do produto sera: %.2f", valor_final);

}
