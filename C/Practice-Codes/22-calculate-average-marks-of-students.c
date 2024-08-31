// Write a program to calculate the average and total of 5 students for 3 subjects (use nested for loops)

#include <stdio.h>
#include <conio.h>

int main(){
    int student, sub, sum, marks;
    for(student = 0; student < 5; student++){
        sum = 0;
        printf("\nEnter The Marks for Student - %d\n", student + 1);
        for(sub = 0; sub < 3; sub++){
            printf("\nEnter Marks for Subject - %d ",sub+1);
            scanf("%d", &marks);
            sum = sum + marks;
        }
        printf("\n For Student - %d\n", student + 1);
        printf("Sum = %d\n", sum);
        printf("Average = %.2f\n", (float)sum/sub);
    }
    getch();
    return 0;
}