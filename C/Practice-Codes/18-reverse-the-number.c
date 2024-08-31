// Write a program to reverse a number

#include <stdio.h>
#include <conio.h>

int main(){
    int n,rev = 0,rem;
    printf("Enter The Integer: ");
    scanf("%d", &n);
    while(n != 0){
        rem = n%10;
        rev = rev*10 + rem;
        n = n/10;
    }
    printf("\nReversed Number: %d\n", rev);
    getch();
    return 0;
}