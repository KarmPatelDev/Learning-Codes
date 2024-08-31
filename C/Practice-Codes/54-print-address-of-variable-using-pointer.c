// Write a program to print address of variable using pointer

#include <stdio.h>
#include <conio.h>

int main(){
    int a = 10;
    int *ptr = &a;
    printf("Pointer Example Program : Print Pointer Address\n");

    printf("\n[a]: value of A = %d", a);
    printf("\n[a]: value of A = %d", *ptr);
    printf("\n[a]: Address of A = %p", &a);
    printf("\n[a]: Address of A = %p", ptr);
    printf("\n[a]: Address of A = %x", &a);
    printf("\n[a]: Address of A = %x", ptr);
    printf("\n[ptr]: Address of ptr = %p", &ptr);
    getch();
    return 0;
}