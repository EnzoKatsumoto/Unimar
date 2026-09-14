#include <stdio.h>
void main(){
    int i;
    for (i = 5; i > 0;){
        printf("\n%d patinhos foram passear \nAlem das montanhas para brincar \nA mamae gritou Quack, quack, quack, quack\n", i);
        i = i - 1;
        if (i > 0){
            printf("Mas so %d patinhos voltaram de la\n", i);
        }
        else{
            printf("Mas nenhum dos patinhos voltaram de la\n");
        }
    }
}
