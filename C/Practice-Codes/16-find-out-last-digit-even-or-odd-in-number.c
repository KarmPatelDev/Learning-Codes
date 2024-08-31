// Write a C program to input an integer number and check the last digit of number is even or odd

#include <stdio.h>
#include <conio.h>

int main(){
    int no, ln;
    printf("Enter The No: ");
    scanf("%d", &no);
    ln = no%10;
    if(ln/2 == 0){
        printf("Last Digit Of %d is even", no);
    }
    else{
        printf("Last Digit Of %d is odd", no);
    }
    getch();
    return 0;
}