#include <stdio.h>
#include <conio.h>
void main(){
    char c;
    int i;
    i = 1;
    while (i <= 35){
        printf("\nDigite um caracter: ");
        c = getche();
        if (c == '$'){
            break;
        }
        else{
            i++;
        }

    }
}
