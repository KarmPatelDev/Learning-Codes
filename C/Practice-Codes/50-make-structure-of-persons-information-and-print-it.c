// Define a structure type struct personal that would contain the person's name, date of joining and salary using this structure to read this information of 5 people and print the same on screen.

#include <stdio.h>
#include <conio.h>

struct personal
{
    char personal_name[34];
    char joint_date[15];
    float salary;
};

struct personal p[5];

int main(){
    int i;
    for(i = 0; i < 5; i++){
        printf("Enter The Name OF Person %d: ", i+1);
        scanf("%s", &p[i].personal_name);
        getchar();
        printf("Enter Joining Date Of Person %d: ", i+1);
        scanf("%s", &p[i].joint_date);
        printf("Enter The Salary Of Person %d: ", i+1);
        scanf("%f", &p[i].salary);
        printf("\n");
    }
    for(i = 0; i < 5; i++){
        printf("\n\nName Of The Person %d: %s", i+1, p[i].personal_name);
        printf("\nJoining Date Of Person %d: %s", i+1, p[i].joint_date);
        printf("\nSalary Of Person %d: %f", i+1, p[i].salary);
    }
    getch();
    return 0;
}