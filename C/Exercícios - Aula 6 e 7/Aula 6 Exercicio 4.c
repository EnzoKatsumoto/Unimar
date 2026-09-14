#include <stdio.h>
#include <locale.h>
#include <string.h>

void main(){
    setlocale(LC_ALL, "portuguese");
    char str[30];
    int tam, i, vogais, consoantes;
    vogais = 0;
    consoantes = 0;

    printf("Digite uma palavra: ");
    scanf("%30s", str);
    tam = strlen(str);
    for (i=0; i<tam; i++){
        if (str[i] == 'a' || str[i] == 'e' || str[i] == 'i' || str[i] == 'o' || str[i] == 'u' || str[i] == 'A' || str[i] == 'E' || str[i] == 'I' || str[i] == 'O' || str[i] == 'U'){
            vogais++;
        }
        else{
            consoantes++;
        }

    }
    printf("A palavra tem %d vogais e %d consoantes", vogais, consoantes);
}
