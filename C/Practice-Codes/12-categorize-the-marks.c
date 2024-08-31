// Write a program to read marks from keyboard and your program should display equivalent grade according to the following table(if else ladder)
// Marks Grade
// 100 - 80 Distinction
// 79 - 60 First Class
// 59 - 40 Second Class
// < 40 Fail

#include <stdio.h>
#include <conio.h>

int main(){
    int marks;
    printf("Enter Marks: ");
    scanf("%d", &marks);
    if(marks >= 80 && marks <= 100){
        printf("Distinct");
    }
    else if(marks < 80 && marks >= 60){
        printf("First Class");
    }
    else if(marks < 60 && marks >= 40){
        printf("Second Class");
    }
    else if(marks < 40){
        printf("Fail");
    }
    getch();
    return 0;
}