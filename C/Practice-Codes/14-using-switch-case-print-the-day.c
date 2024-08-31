// Write a C program to read no 1 to 7 and print relatively day Sunday to Saturday

#include <stdio.h>
#include <conio.h>

int main(){
    int i;
    printf("Enter Number Between 1 to 7\n");
    scanf("%d", &i);
    switch(i){
        case 1:
        printf("Sunday");
        break;
        case 2:
        printf("Monday");
        break;
        case 3:
        printf("Tuesday");
        break;
        case 4:
        printf("Wednesday");
        break;
        case 5:
        printf("Thursday");
        break;
        case 6:
        printf("Friday");
        break;
        case 7:
        printf("Saturday");
        break;
        default:
        printf("Wrong Number");
    }

    getch();
    return 0;
}