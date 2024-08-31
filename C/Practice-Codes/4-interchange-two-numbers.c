// Write a C program to interchange two numbers

#include <stdio.h>
#include <conio.h>

int main(){
    int a, b, temp;
    printf("Enter The Value Of A and B\n");
    scanf("%d %d", &a, &b);
    printf("\nBefore Interchange: A = %d B = %d\n", a, b);
    temp = a;
    a = b;
    b = temp;
    printf("\nAfter Interchange: A = %d B = %d\n", a, b);
    getch();
    return 0;
}