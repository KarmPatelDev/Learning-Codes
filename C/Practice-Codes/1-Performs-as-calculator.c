// Write a Program that performs as calculator ( addition, multiplication, division, subtraction)

#include <stdio.h>
#include <conio.h>

void main(){
    int i, j, k;
    i = 10;
    j = 5;
    
    k = i + j;
    printf("Addition = %d\n", k);
    k = i - j;
    printf("Subtraction = %d\n", k);
    k = i * j;
    printf("Multiplication = %d\n", k);
    k = i / j;
    printf("Division = %d\n", k);
    getch();

}