// Write a program to read marks of a student from keyboard whether the student is pass or fail(using if else)

#include <stdio.h>
#include <conio.h>

int main(){
    int i;
    printf("\nEnter Your Marks\n");
    scanf("%d", &i);
    if(i < 35){
        printf("\nFailed\n");
    }
    else{
        printf("\nPassed\n");
    }
    getch();
    return 0;
}