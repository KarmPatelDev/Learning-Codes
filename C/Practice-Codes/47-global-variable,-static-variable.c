// Write a C program using global variable, static variable

#include <stdio.h>
#include <conio.h>

int a = 100;
//  static int a = 100;

int Globe(){
    printf("Outer Globle Variable, a = %d\n", a);
    a++;
    printf("Outer Globle Variable, a = %d\n", a);
}

int main(){
    int a = 10;
    printf("Inner Static Variable, a = %d\n\n", a);
    Globe();
    getch();
    return 0;
}