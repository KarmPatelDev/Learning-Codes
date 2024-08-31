// Write a program to delete a character in a given string

#include <stdio.h>
#include <conio.h>

int main(){
    char s[80], c;
    int i, p;
    printf("enter string");
    gets(s);
    printf("enter character:");
    scanf("%d",&p);
    for(i = p - 1; s[i] != 0; i++){
        s[i] = s[i + 1];
    }
    printf("resulted string:");
    puts(s);
    getch();
    return 0;
}
