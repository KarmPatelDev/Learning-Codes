// Write a program to find a character from the given string

#include <stdio.h>
#include <conio.h>

int main(){
    char s[15], dis;
    int i = 0, c = 0;
    printf("Enter String: ");
    gets(s);
    printf("Enter char you want to find: ");
    scanf("%c", &dis);
    printf("Pos: ");
    for(i = 0; s[i]!='\0'; i++){
        if(s[i] == dis){
            c++;
        }
    }
    printf("value = %d", c);
    getch();
    return 0;
}