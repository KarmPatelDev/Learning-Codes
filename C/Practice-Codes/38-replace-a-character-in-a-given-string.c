// Write a program to replace a character in a given string

#include <stdio.h>
#include <conio.h>

int main()
{
    char s[80], ch, nch;
    int p, i;
    printf("enter string:");
    gets(s);
    printf("enter pos:");
    scanf("%d", &p);
    getchar();
    printf("enter new char:");
    scanf("%c", &nch);
    s[p - 1] = nch;
    printf("resulted string:");
    puts(s);
    getch();
    return 0;
}

/*
int main(){
    char s[80], ch, nch, temp;
    int i;
    printf("Enter String: ");
    gets(s);
    printf("Enter Character: ");
    scanf("%c", &ch);
    getchar();
    printf("enter new char: ");
    scanf("%c",&nch);

    for(i = 0; s[i]!='\0'; i++){
        if(s[i] == ch){
            s[i] = nch;
        }
    }
    
    printf("resulted string:");
    puts(s);
    getch();
    return 0;
}
*/


