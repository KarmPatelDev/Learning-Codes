// Write a program to reverse string

#include <stdio.h>
#include <conio.h>

int main(){
    char s[15];
    int i, j, temp, t = 0;
    printf("Enter String: ");
    gets(s);
    for(i = 0; s[i] != '\0'; i++){
        t++;
    }
    
    for(i = 0, j = t - 1; i <= (t - 1)/2; i++, j--){
        temp = s[i];
        s[i] = s[j];
        s[j] = temp;
    }

    printf("resulted string:");
    puts(s);
    getch();
    return 0;
}