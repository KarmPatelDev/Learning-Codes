// Write a program to generate first n number of Fibonacci series

#include <stdio.h>
#include <conio.h>

int main(){
    int a = 1, b = 1, c, n, i = 0;
    printf("Enter Number: ");
    scanf("%d", &n);
    printf("\nFirst %d Terms Fibonacci Series Numbers are:\n\n", n);
    printf("%d , %d", a, b);

    while(i < n - 2){
        c = a + b;
        printf(", %d", c);
        a = b;
        b = c;
        i++;
    }
    getch();
    return 0;
}