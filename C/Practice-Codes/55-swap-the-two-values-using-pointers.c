// Write a C program to swap the two values using pointers

#include <stdio.h>
#include <conio.h>

int main(){
    int x, y, *a, *b, temp;
    printf("Enter The Value Of X and Y\n");
    scanf("%d %d", &x, &y);
    printf("\nBefore Swapping :- x = %d and Y = %d\n\n", x, y);
    a = &x;
    b = &y;
    temp = *a;
    *a = *b;
    *b = temp;
    printf("After Swapping :- x = %d and Y = %d\n", x, y);
    getch();
    return 0;
}