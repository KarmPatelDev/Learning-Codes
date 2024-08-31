// Write a function that will scan a character string passed as an argument and convert all lowercase characters into their uppercase equivalents

#include <stdio.h>
#include <conio.h>

void upper(char str[34]){
    int i;
    for(i = 0; str[i]!='\0'; i++){
        if(str[i] >= 97 && str[i] <= 122){
            str[i] = str[i] - 32;
        }
    }
    printf("Converted String: %s", str);
}
void main(){
    char str[34];
    printf("Enter The String: ");
    gets(str);
    printf("\n\nEntered String: %s\n\n", str);
    upper(str);
}