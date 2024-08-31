// Design a structure student_record to contain name, branch and total marks obtained. Develop a program to read data for 10 students in a class and print them

#include <stdio.h>
#include <conio.h>

struct student
{
    char person_name[34];
    char branch[34];
    int total_marks;
};

struct student s[10];

int main(){
    int i;
    for(i = 0; i < 10; i++){
        printf("Enter The Name OF Student %d: ", i+1);
        scanf("%s", &s[i].person_name);
        getchar();
        printf("Enter Branch Of Student %d: ", i+1);
        scanf("%s", &s[i].branch);
        printf("Enter Total Marks Of Student %d: ", i+1);
        scanf("%d", &s[i].total_marks);
        printf("\n");
    }
    for(i = 0; i < 10; i++){
        printf("\n\nName Of The Student %d: %s", i+1, s[i].person_name);
        printf("\nBranch Of Student %d: %s", i+1, s[i].branch);
        printf("\nTotal Marks Of Student %d: %d", i+1, s[i].total_marks);
    }
    getch();
    return 0;
}