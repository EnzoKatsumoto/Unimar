#include <stdio.h>
#include <locale.h>
void main() {
    setlocale(LC_ALL, "pt_BR.UTF-8");
    float a, b, c, d, med;
    printf("Digite o primeiro valor: ");
    scanf("%f", &a);
    printf("Digite o segundo valor: ");
    scanf("%f", &b);
    printf("Digite o terceiro valor: ");
    scanf("%f", &c);
    printf("Digite o quarto valor: ");
    scanf("%f", &d);

    med = (a + b + c + d)/4;
    printf("A media vale: %f", med);


}
