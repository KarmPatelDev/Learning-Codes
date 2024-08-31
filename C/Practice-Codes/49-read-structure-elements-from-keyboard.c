// Write a program to read structure elements from keyboard

#include <stdio.h>
#include <conio.h>

struct student
{
    char name[34];
    int roll;
    float marks;
} s;

int main(){
    printf("Enter The Student Name: ");
    scanf("%s", &s.name);
    getchar();
    printf("Enter The Student Roll No.: ");
    scanf("%d", &s.roll);
    getchar();
    printf("Enter The Student Marks: ");
    scanf("%f", &s.marks);
    printf("\n\nDisplaying Information: \n");
    printf("Name: %s\n", s.name);
    printf("Roll Number: %d\n", s.roll);
    printf("Marks: %.1f\n", s.marks);
    getch();
    return 0;
}