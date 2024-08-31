// Write a program to calculate simple interest (i = (p*r*n)/100 )

#include <stdio.h>
#include <conio.h>

float main(){
    float i, p, r, n;
    printf("Enter the Principal Amount:\n");
    scanf("%f", &p);
    printf("\nEnter the Rate of Interest:\n");
    scanf("%f",&r);
    printf("\nEnter the Duration:\n");
    scanf("%f",&n);
    i = (p * r * n)/100;
    printf("\nSimple Interest = %f\n",i);
    getch();
    return  0;
}