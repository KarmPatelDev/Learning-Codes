// Write a program to convert string into upper case

#include <stdio.h>
#include <conio.h>

int main(){
    char s[20];
    int i, j;
    printf("Enter String: ");
    gets(s);
    for(i = 0; s[i] != '\0'; i++){
        if(s[i] >= 97 && s[i] <= 122){
            s[i] = s[i] - 32;
        }
    }
    puts(s);
    getch();
    return 0;
}