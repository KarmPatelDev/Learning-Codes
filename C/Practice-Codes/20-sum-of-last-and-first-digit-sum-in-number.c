// Write a program to find out the sum of first and last digit of a given number

#include <stdio.h>
#include <conio.h>

int main(){
    int n, lastno, firstno;
    printf("Enter an Integer Number: ");
    scanf("%d", &n);
    lastno = n%10;
    firstno = n;
    while(firstno >= 10){
        firstno = firstno/10;
    }
    printf("\nSum of First and Last Digit of %d is %d\n", n, (firstno + lastno));
    getch();
    return 0;
}