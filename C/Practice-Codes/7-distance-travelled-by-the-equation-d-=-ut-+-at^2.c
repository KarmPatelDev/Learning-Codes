//  Write a C program to find out the distance travelled by the equation d = ut + at^2

#include <stdio.h>
#include <conio.h>

int main(){
    int ut, a, t, d;
    printf("\nEnter Initial Velocity\n");
    scanf("%d", &ut);
    printf("Enter Accelaration\n");
    scanf("%d", &a);
    printf("Enter Time\n");
    scanf("%d", &t);
    d = ut + (a*t)*(a*t);
    printf("\nDistance: %d\n", d);
    getch();
    return 0;
}