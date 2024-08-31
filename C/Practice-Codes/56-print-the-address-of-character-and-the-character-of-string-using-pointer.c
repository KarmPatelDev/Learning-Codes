// Write a C program to print the address of character and the character of string using pointer

#include <stdio.h>
#include <conio.h>

int main(){

    char str[34];
    
    printf("Enter The String: ");
    gets(str);
    char *ptr = str;
    printf("\n\nEntered String Is :-\n\n");
    while(*ptr != '\0'){
        printf("Address = %p \t Value = %c\n", ptr, *ptr++);
        
    }
    
    getch();
    return 0;
}