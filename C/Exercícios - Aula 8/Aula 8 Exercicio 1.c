#include <stdio.h>
#include <locale.h>
#include <string.h>
#include <conio.h>

    struct aluno1{
        char nome[20];
        int RA;
        char cidade[50];
        float media;
    };

     struct aluno2{
        char nome[20];
        int RA;
        char cidade[50];
        float media;
    };

     struct aluno3{
        char nome[20];
        int RA;
        char cidade[50];
        float media;
    };

void main(){

    setlocale(LC_ALL, "portuguese");

    struct aluno1 aluno;
    printf("Nome do aluno:");
    gets(aluno1.nome);

}
